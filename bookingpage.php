<!DOCTYPE html>
<html lang="en">
<head>
    <title>booking page</title>
    <link rel="stylesheet" href="bookingpage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <form action="book_form.php" method="POST" class="book_form">
        <div class="book">
            <div class="search_box">
                <div class="card">
                    <h4>Adress <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="card">
                    <h4>Where To <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="text" placeholder="Enter your destination" name="location">
                </div>
                <div class="card">
                    <h4>Arrivals <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="date" name="arrivals">
                </div>
                <div class="card">
                    <h4>Leaving <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="date" name="leaving">
                </div>
                <div class="card">
                    <h4>People <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="number" placeholder="How many people?" name="people">
                </div>
                <div class="card">
                    <h4>Email <i class="bi bi-caret-down-fill"></i></h4>
                    <input type="email" placeholder="Enter your email address" name="email">
                </div>
                <input type="submit" value="Submit" name="send">
            </div>
        </div>
    </form>
</body>

</html>