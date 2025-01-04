<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            text-align: center;
            /* Corrected */
        }

        table {
            margin-top: 50px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-collapse: collapse;
            width: 80%;
        }

        th {
            background-color: #343a40;
            color: black;
            padding: 15px;
        }

        td {
            background-color: #ffffff;
            color: #343a40;
            padding: 15px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        h2 {
            margin-top: 30px;
            color: #343a40;
        }

        .success {
            color: green;
        }

        img {
            width: 100px;
            border-radius: 10px;
        }
         /* Responsive Adjustments */
         @media (max-width: 768px){
            .body{
                display: none;
            }
          
        }
        @media (min-width: 1200px){
        .str{
            display: none;
        }
        }
        @media (min-width: 1000px){
        .str{
            display: none;
        }
        }
    </style>
</head>
<body >
<strong class="text-danger str">GO AND OPEN IT ON YOUR LAPTOP!!!</strong>
<div class="table-container body">
        <h2>Review  Table</h2>
        <?php
        include('config.php');

        // Fetch data from the database
        $sql = "SELECT id, name, love, hate, rate FROM review"; // Added `id` field
        $stmt = $conn->query($sql);

        if ($stmt === false) {
            echo "<p class='text-danger'>Error fetching data: " . htmlspecialchars($conn->error) . "</p>";
            exit;
        }

       
        ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>love</th>
                    <th>hate</th>
                    <th>rate</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['name']); ?></td>
                        <td><?= htmlspecialchars($row['love']); ?></td>
                        <td><?= htmlspecialchars($row['hate']); ?></td>
                        <td><?= htmlspecialchars($row['rate']); ?></td>
                        <td>
                            <a href="edit-review.php?id=<?= urlencode( base64_encode(string: $row['id'])); ?>"
                                class="btn btn-success btn-edit btn-sm">Edit</a>
                            <a class="btn btn-sm btn-danger"
                                href="delete-review.php?id=<?= urlencode(base64_encode($row['id'])); ?>"
                                onclick="return confirm('Are you sure you want to delete this entry?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    </div><br><br><br>
    <a href="admin_dashboard.php"><button  class="btn btn-success ">
        Go Back Home
    </button></a>
</body>
</html>