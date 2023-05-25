<?php

namespace App\Services;

class AppointmentsService {

    public function getAllAppointments(): array {
        return [
            [
                "id" => 286453,
                "type" => "Cita oncológica",
                "date" => "23/02/2023",
                "time" => "10:00 AM",
                "clinic" => [
                    "id" => 282353,
                    "name" => "SAN LORENZO",
                    "address" => 'Calle Gil 8, 23540 MADRID',
                ],
                "patient" => [
                    "id" => 281253,
                    "name" => "Alejandro",
                    "address" => 'Calle Gil 8, 23540 MADRID',
                ],
                "status" => false
            ],
            [
                "id" => 286153,
                "type" => "Cita oncológica",
                "date" => "23/02/2023",
                "time" => "10:00 AM",
                "clinic" => [
                    "id" => 289353,
                    "name" => "SAN LORENZO",
                    "address" => 'Calle Gil 8, 23540 MADRID',
                ],
                "patient" => [
                    "id" => 283453,
                    "name" => "Felix",
                    "address" => 'Calle Gil 8, 23540 MADRID',
                ],
                "status" => true
            ],
        ];
    }

    public function getAppointment(string $id): array {
        return [
            "id" => 286453,
            "type" => "Cita oncológica",
            "date" => "23/02/2023",
            "time" => "10:00 AM",
            "clinic" => [
                "id" => '362883652',
                'name' => 'SAN LORENZO',
                "address" => 'Calle Gil 8, 23540 MADRID',
            ],
            "patient" => [
                "id" => 281253,
                "name" => "Alejandro",
                "address" => 'Calle Gil 8, 23540 MADRID',
            ],
            "status" => true
        ];
    }

};