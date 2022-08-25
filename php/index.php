<?php

class Connection {
    private static array $connections = [
        'db' => null
    ];

    protected function __construct() {}

    public static function getDBConnection(): PDO
    {
        if (!self::$connections['db']) {
            try {
                self::$connections['db'] = new PDO(
                    "mysql:host=mysql;dbname=db",
                    'admin',
                    'admin'
                );
                self::$connections['db']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\Exception $exception) {
                echo "Connection failed: " . $exception->getMessage();
            }
        }

        return self::$connections['db'];
    }
}

class Server {
    private array $dates = [];

    public function __construct(
        private PDO $connection
    ) {
    }

    public function getItem(): array
    {
        return [];
    }
}

$server = new Server(
    Connection::getDBConnection()
);

$server->getItem();