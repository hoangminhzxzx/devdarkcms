<?php

namespace DevDarkCms;

use GuzzleHttp\Client;
use Illuminate\Database\Capsule\Manager as Capsule;
use Dotenv\Dotenv;

class CMS
{
    protected $client;
    protected $db;

    public function __construct()
    {
        // Load environment variables
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        $this->client = new Client();
        $this->db = new Capsule;

        // Set up the database connection using environment variables
        $this->db->addConnection([
            'driver'    => $_ENV['DB_CONNECTION'],
            'host'      => $_ENV['DB_HOST'],
            'port'      => $_ENV['DB_PORT'],
            'database'  => $_ENV['DB_DATABASE'],
            'username'  => $_ENV['DB_USERNAME'],
            'password'  => $_ENV['DB_PASSWORD'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        // Make this Capsule instance available globally via static methods
        $this->db->setAsGlobal();

        // Setup the Eloquent ORM
        $this->db->bootEloquent();
    }

    public function fetchDataAndSave()
    {
        $response = $this->client->get('https://otruyen.cc/api/endpoint');
        $data = json_decode($response->getBody(), true);

        // Assuming $data is an array of items
        foreach ($data as $item) {
            $this->db->table('your_table')->insert($item);
        }
    }
}