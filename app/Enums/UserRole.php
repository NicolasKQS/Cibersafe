<?php

namespace App\Enums;

enum UserRole: string
{
    case SuperAdmin = 'super_admin';
    case Admin = 'admin';
    case Analyst = 'analyst';
    case Operator = 'operator';
    case Viewer = 'viewer';

    public function label(): string
    {
        return match ($this) {
            self::SuperAdmin => 'Super Admin',
            self::Admin => 'Administrador',
            self::Analyst => 'Analista SOC',
            self::Operator => 'Operador',
            self::Viewer => 'Consulta',
        };
    }

    public static function values(): array
    {
        return array_map(static fn (self $r) => $r->value, self::cases());
    }
}

