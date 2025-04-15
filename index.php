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

            <div class="response-content_blank"></div>

            <div class="search-container">
                <div class="search-box">
                    <div class="search-input-container">
                        <input type="text" placeholder="What do you want to know?">
                    </div>
                    <div class="search-actions">
                        <div class="model-selector">
                            <select class="model-selector-dropdown">
                                <option value="llama3.2-vision:11b ">llama3.2-vision:11b </option>
                                <option value="gemma3:4b">gemma3:4b</option>
                                <option value="gemma3:1b">gemma3:1b</option>
                                <!-- not usable -->
                                <option value="deepseek-r1:1b">deepseek-r1:1b</option>
                                <option value="qwen2.5:14b">qwen2.5:14b</option>
                                <option value="gemma2:9b">gemma2:9b</option>
                            </select>
                            <!-- <img src="https://api.iconify.design/heroicons:chevron-down.svg" alt="Dropdown" class="chevron"> -->
                        </div>
                        <button class="expand-button">
                            <img src="https://api.iconify.design/heroicons:arrow-up.svg" alt="Expand">
                        </button>
                    </div>
                </div>
                <div class="loading-indicator" style="display: none;">
                    <div class="loading-spinner"></div>
                    <p>Generating response...</p>
                </div>
            </div>
        </main>

        <script>
            $(document).ready(function() {
                $('.expand-button').click(function() {
                    var selectedModel = $('.model-selector-dropdown').val();
                    var userInput = $('.search-input-container input').val();
                    
                    // Show loading indicator
                    $('.loading-indicator').show();
                    $('.search-box').css('opacity', '0.5');
                    $('.expand-button').prop('disabled', true);
                    
                    $.post("server.php", {
                        selectedModel: selectedModel, 
                        userInput: userInput
                    })
                    .then(function(data) {
                        $(".response-content_blank").html(data);
                        //add a margin bottom 20px to .response-content_blank
                        $(".response-content_blank").css('margin-bottom', '20px');
                        //turn off the header
                        $(".welcome-text").css({'display': 'none', 'height': '0', 'margin': '0', 'padding': '0'});
                        //add a replied class to the main
                        $("main").addClass("replied");
                    })
                    .fail(function() {
                        $('.loading-indicator').html('<p style="color: #dc2626;">An error occurred. Please try again.</p>');
                    })
                    .always(function() {
                        $('.loading-indicator').hide();
                        $('.search-box').css('opacity', '1');
                        $('.expand-button').prop('disabled', false);
                    });
                });
            });


        </script>
    </div>
</body>
</html> 

