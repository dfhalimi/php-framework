<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Framework</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <h1>Address Management</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Street Address</th>
                <th>City</th>
                <th>Country</th>
            </tr>
            <?php
            use App\AddressManagement\Presentation\Dto\PersonDto;
            /** @var PersonDto[] $addresses */
            foreach ($addresses as $address) : ?>
                <tr>
                    <td><?= $address->id ?></td>
                    <td><?= $address->lastName ?></td>
                    <td><?= $address->firstName ?></td>
                    <td><?= $address->streetAddress ?></td>
                    <td><?= $address->city ?></td>
                    <td><?= $address->country ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
