<?php

namespace App\Services;

class PatientsService {

    public function getAllPatients(): array {
        return[
            [
                "id" => '362836521',
                "name" => 'Carlson',
                "last_name" => 'Latesd',
                "email" => 'carlson@email.com',
                "address" => 'Calle Amargura 8, 24040 MADRID',
                "clinic" => [
                    "id" => '362883652',
                    'name' => 'SAN LORENZO',
                    "address" => 'Calle Gil 8, 23540 MADRID',
                ],
                "appointments" => [
                    [
                        "id" => 2753416,
                        "type" => 'Cita Oncologica',
                        "clinic_id" => 362832651,
                        "date" => "24/02/2023 10:00 AM",
                    ],
                    [
                        "id" => 2752416,
                        "type" => 'Cita Pediatría',
                        "clinic_id" => 36234651,
                        "date" => "28/03/2023 09:00 AM",
                    ]
                ],
                "status" => false,
            ],
            [
                "id" => '362832651',
                "name" => 'Alejandro',
                "last_name" => 'Rodriguez',
                "email" => 'ale@gmail.com',
                "address" => 'Calle Quijote 90, 24056 BARCELONA',
                "clinic" => [
                    "id" => '362883652',
                    'name' => 'SAN LORENZO',
                    "address" => 'Calle Gil 8, 23540 MADRID',
                ],
                "appointments" => [
                    [
                        "id" => 2753416,
                        "type" => 'Cita Oncologica',
                        "clinic_id" => 362832651,
                    ],
                    [
                        "id" => 2752416,
                        "type" => 'Cita Pediatría',
                        "clinic_id" => 36234651,
                    ]
                ],
                "status" => true,
            ],
            [
                "id" => '362832651',
                "name" => 'Pablo',
                "last_name" => 'Rodriguez',
                "email" => 'pablo@gmail.com',
                "address" => 'Calle Quijote 90, 24056 BARCELONA',
                "clinic" => [
                    "id" => '362883652',
                    'name' => 'SAN LORENZO',
                    "address" => 'Calle Gil 8, 23540 MADRID',
                ],
                "appointments" => [
                    [
                        "id" => 2753416,
                        "type" => 'Cita Oncológica',
                        "clinic_id" => 362832651,
                    ],
                    [
                        "id" => 2752416,
                        "type" => 'Cita Pediatría',
                        "clinic_id" => 36234651,
                    ]
                ],
                "status" => true,
            ],
        ];
    }

    public function getPatient(string $id): array {
        return [
            "id" => '362836521',
            "name" => 'Carlson',
            "last_name" => 'Latesd',
            "email" => 'carlson@email.com',
            "address" => 'Calle Amargura 8, 24040 MADRID',
            "clinic" => [
                "id" => '362883652',
                'name' => 'SAN LORENZO',
                "address" => 'Calle Gil 8, 23540 MADRID',
            ],
            "appointments" => [
                [
                    "id" => 2753416,
                    "type" => 'Cita Oncologica',
                    "clinic_id" => 362832651,
                    "date" => "24/02/2023 10:00 AM",
                ],
                [
                    "id" => 2752416,
                    "type" => 'Cita Pediatría',
                    "clinic_id" => 36234651,
                    "date" => "28/03/2023 09:00 AM",
                ]
            ],
            "tests" => [
                [
                    "id" => 2753416,
                    "type" => 'Prueba Prostata',
                    "clinic_id" => 362832651,
                    "date" => "21/01/2023 11:00 AM",
                ],
                [
                    "id" => 2752416,
                    "type" => 'Prueba Ocular',
                    "clinic_id" => 36234651,
                    "date" => "28/02/2023 08:00 AM",
                ]
            ],
            "status" => false,
        ];
    }

}