<?php
declare(strict_types=1);

/**
 * Sample PHP Application
 * SonarQube Friendly Code Example
 * --------------------------------
 * - No hardcoded secrets
 * - Low cognitive complexity
 * - Type declarations
 * - Constants instead of magic values
 * - Input validation
 * - Clean structure
 */

namespace App;

use Exception;

/**
 * Class Logger
 */
class Logger
{
    private const INFO = 'INFO';
    private const ERROR = 'ERROR';

    public static function info(string $message): void
    {
        self::log(self::INFO, $message);
    }

    public static function error(string $message): void
    {
        self::log(self::ERROR, $message);
    }

    private static function log(string $level, string $message): void
    {
        echo sprintf("[%s] %s%s", $level, $message, PHP_EOL);
    }
}

/**
 * Class Database
 * (Mocked for Sonar analysis – no real DB connection)
 */
class Database
{
    private string $host;
    private string $user;
    private string $password;

    public function __construct()
    {
        $this->host = getenv('DB_HOST') ?: 'localhost';
        $this->user = getenv('DB_USER') ?: 'root';
        $this->password = getenv('DB_PASSWORD') ?: '';
    }

    public function connect(): bool
    {
        if ($this->password === '') {
            Logger::error('Database password not set');
            return false;
        }

        Logger::info('Database connected successfully');
        return true;
    }

    public function fetchUserById(int $id): array
    {
        // Simulated prepared statement result
        return [
            'id' => $id,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'active' => true
        ];
    }
}

/**
 * Class Validator
 */
class Validator
{
    public static function validateId(int $id): void
    {
        if ($id <= 0) {
            throw new Exception('Invalid ID');
        }
    }

    public static function validateEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email');
        }
    }
}

/**
 * Class User
 */
class User
{
    private int $id;
    private string $name;
    private string $email;
    private bool $active;

    public function __construct(int $id, string $name, string $email, bool $active)
    {
        Validator::validateId($id);
        Validator::validateEmail($email);

        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->active = $active;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function getProfile(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'status' => $this->active ? 'Active' : 'Inactive'
        ];
    }
}

/**
 * Class UserService
 */
class UserService
{
    private Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getUser(int $id): User
    {
        Validator::validateId($id);

        $data = $this->database->fetchUserById($id);

        return new User(
            $data['id'],
            $data['name'],
            $data['email'],
            $data['active']
        );
    }
}

/**
 * Utility functions
 */
class Utils
{
    public static function sanitize(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    public static function formatDate(string $date): string
    {
        return date('Y-m-d', strtotime($date));
    }
}

/**
 * Application Controller
 */
class Application
{
    private UserService $userService;

    public function __construct()
    {
        $database = new Database();

        if (!$database->connect()) {
            throw new Exception('Failed to connect to database');
        }

        $this->userService = new UserService($database);
    }

    public function run(): void
    {
        try {
            $userId = $this->getRequestUserId();
            $user = $this->userService->getUser($userId);
            $this->renderUser($user);
        } catch (Exception $exception) {
            Logger::error($exception->getMessage());
        }
    }

    private function getRequestUserId(): int
    {
        $id = $_GET['id'] ?? 1;
        return (int) $id;
    }

    private function renderUser(User $user): void
    {
        $profile = $user->getProfile();

        foreach ($profile as $key => $value) {
            echo Utils::sanitize((string)$key) . ': ' .
                 Utils::sanitize((string)$value) . PHP_EOL;
        }
    }
}

/**
 * Entry Point
 */
try {
    $app = new Application();
    $app->run();
} catch (Exception $e) {
    Logger::error('Application error: ' . $e->getMessage());
}

/**
 * End of File
 * Total lines ~300
 */
