<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>📝 My To-Do List</h2>

        <form action="add.php" method="POST">
            <input type="text" name="task" placeholder="Enter a new Task.." required>
            <button type="submit">Add</button>
        </form>

        <ul class="task-list">
            <?php
            $sql = "SELECT * FROM tasks ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
            ?>
                <li class="<?= $row['is_done'] ? 'done' : '' ?>">
                    <?= htmlspecialchars($row['task']) ?>
                    <div class="actions">
                        <?php if (!$row['is_done']): ?>
                            <a href="complete.php?id=<?= $row['id'] ?>">✅</a>
                        <?php endif; ?>
                        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this Task?')">❌</a>
                    </div>
                </li>
            <?php
                endwhile;
            else:
                echo "<p>No tasks added yet.</p>";
            endif;
            ?>
        </ul>
        <h2>By Sh4nid</h2>
    </div>
</body>
</html>
