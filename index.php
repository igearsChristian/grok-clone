<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grok</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">

        <main>
            <div class="welcome-text">
                <h1>Good afternoon, Christian.</h1>
                <h2>How can I help you today?</h2>
            </div>

            <div class="search-container">
                <div class="search-box">
                    <div class="search-input-container">
                        <input type="text" placeholder="What do you want to know?">
                    </div>
                    <div class="search-actions">
                        <div class="model-selector">
                            <select class="model-selector-dropdown">
                                <option value="grok3">Grok 3</option>
                                <option value="grok2">Grok 2</option>
                                <option value="grok1">Grok 1</option>
                            </select>
                            <!-- <img src="https://api.iconify.design/heroicons:chevron-down.svg" alt="Dropdown" class="chevron"> -->
                        </div>
                        <button class="expand-button">
                            <img src="https://api.iconify.design/heroicons:arrow-up.svg" alt="Expand">
                        </button>
                    </div>
                </div>
            </div>
        </main>



        <script>
            $(document).ready(function() {
                $('.expand-button').click(function() {
                    $("body").load("chat.php");
                });
            });

        </script>
    </div>
</body>
</html> 