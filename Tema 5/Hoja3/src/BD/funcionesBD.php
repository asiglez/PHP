<?php

namespace Src\BD;

use PDO;
use PDOException;
use Exception;

class FuncionesBD
{
    public static function crearUsuario(string $usuario, string $contraseña): bool
    {
        try {
            $pdo = ConexionBD::getConnection();
            if (!$pdo) {
                throw new PDOException("Error al conectar a la base de datos");
            }

            $hashedPassword = password_hash($contraseña, PASSWORD_BCRYPT);

            $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)");
            $stmt->execute([':usuario' => $usuario, ':password' => $hashedPassword]);

            return true;
        } catch (PDOException $e) {
            throw new Exception("Error al crear usuario: " . $e->getMessage());
        }
    }

    public static function verificarUsuario(string $usuario, string $contraseña): bool
    {
        try {
            $pdo = ConexionBD::getConnection();
            if (!$pdo) {
                throw new PDOException("Error al conectar a la base de datos");
            }

            $stmt = $pdo->prepare("SELECT password FROM usuarios WHERE usuario = :usuario");
            $stmt->execute([':usuario' => $usuario]);
            $hashedPassword = $stmt->fetchColumn();

            if (!$hashedPassword) {
                throw new Exception("Usuario no encontrado");
            }

            return password_verify($contraseña, $hashedPassword);
        } catch (PDOException $e) {
            throw new Exception("Error al verificar usuario: " . $e->getMessage());
        }
    }
}