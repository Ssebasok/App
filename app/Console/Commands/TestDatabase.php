<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestDatabase extends Command
{
    protected $signature = 'db:test';
    protected $description = 'Test database connection';

    public function handle()
    {
        try {
            $pdo = DB::connection()->getPdo();
            $this->info('✅ Conexión exitosa a la base de datos');
            $this->info('Driver: ' . $pdo->getAttribute(\PDO::ATTR_DRIVER_NAME));
            $this->info('Server version: ' . $pdo->getAttribute(\PDO::ATTR_SERVER_VERSION));
        } catch (\Exception $e) {
            $this->error('❌ Error de conexión: ' . $e->getMessage());
        }
    }
} 