<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Gift Card | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="site-header">
        <a class="brand" href="card-list.php">AirAsia Rewards</a>
        <nav class="user-nav">Admin &middot; <a href="login.php">Logout</a></nav>
    </header>

    <main>
        <a class="back-link" href="card-details.php">&larr; Back to card details</a>

        <section class="form-card">
            <h1>Update Gift Card</h1>

            <!-- Fields are pre-filled with the current card data.
                 Card ID is not editable, so it is not shown as a form field. -->
            <form action="card-list.php" method="post">
                <div class="form-field">
                    <label for="cardName">Card name</label>
                    <input type="text" id="cardName" name="cardName" maxlength="100"
                        value="Starbucks eGift" required>
                </div>

                <div class="form-field">
                    <label for="cardType">Card type</label>
                    <select id="cardType" name="cardType" required>
                        <option value="Food & Beverage" selected>Food &amp; Beverage</option>
                        <option value="Shopping">Shopping</option>
                        <option value="Travel">Travel</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Beauty">Beauty</option>
                    </select>
                </div>

                <div class="form-field">
                    <label for="cardValue">Card value ($)</label>
                    <input type="number" id="cardValue" name="cardValue" min="0.01" step="0.01"
                        value="25.00" required>
                </div>

                <div class="form-field">
                    <label for="points">Points required</label>
                    <input type="number" id="points" name="points" min="1" step="1" value="2500" required>
                </div>

                <div class="form-buttons">
                    <button type="submit" class="btn btn-primary">Update Card</button>
                    <a class="btn btn-secondary" href="card-details.php">Cancel</a>
                </div>
            </form>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; 2026 AirAsia Rewards Redemption System</p>
    </footer>
</body>

</html>
