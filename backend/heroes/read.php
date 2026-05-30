<?php
include "../backend/config/db.php";

$query = mysqli_query($conn, "SELECT * FROM heroes");
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Role</th>
        <th>Damage</th>
        <th>Aksi</th>
    </tr>

    <?php while($hero = mysqli_fetch_assoc($query)) : ?>
    <tr>
        <td><?= $hero['id']; ?></td>
        <td><?= $hero['nama']; ?></td>
        <td><?= $hero['role']; ?></td>
        <td><?= $hero['damage']; ?></td>
        <td>
            <a href="edit_hero.php?id=<?= $hero['id']; ?>">Edit</a>
            <a href="../backend/heroes/delete.php?id=<?= $hero['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>
