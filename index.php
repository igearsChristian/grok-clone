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
        <header>
            <div class="header-left">
                <div class="logo"><img src="images/logo.png" alt="logo"></div>
            </div>
            <div class="header-right">
                <button class="icon-button"><img src="https://api.iconify.design/heroicons:user-circle.svg" alt="Profile"></button>
                <button class="icon-button"><img src="https://api.iconify.design/heroicons:language.svg" alt="Language"></button>
            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 8.25a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5M9.75 12a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0"/><path d="M11.975 1.25c-.445 0-.816 0-1.12.02a2.8 2.8 0 0 0-.907.19a2.75 2.75 0 0 0-1.489 1.488c-.145.35-.184.72-.2 1.122a.87.87 0 0 1-.415.731a.87.87 0 0 1-.841-.005c-.356-.188-.696-.339-1.072-.389a2.75 2.75 0 0 0-2.033.545a2.8 2.8 0 0 0-.617.691c-.17.254-.356.575-.578.96l-.025.044c-.223.385-.408.706-.542.98c-.14.286-.25.568-.29.88a2.75 2.75 0 0 0 .544 2.033c.231.301.532.52.872.734a.87.87 0 0 1 .426.726a.87.87 0 0 1-.426.726c-.34.214-.64.433-.872.734a2.75 2.75 0 0 0-.545 2.033c.041.312.15.594.29.88c.135.274.32.595.543.98l.025.044c.222.385.408.706.578.96c.177.263.367.5.617.69a2.75 2.75 0 0 0 2.033.546c.376-.05.716-.2 1.072-.389a.87.87 0 0 1 .84-.005a.86.86 0 0 1 .417.731c.015.402.054.772.2 1.122a2.75 2.75 0 0 0 1.488 1.489c.29.12.59.167.907.188c.304.021.675.021 1.12.021h.05c.445 0 .816 0 1.12-.02c.318-.022.617-.069.907-.19a2.75 2.75 0 0 0 1.489-1.488c.145-.35.184-.72.2-1.122a.87.87 0 0 1 .415-.732a.87.87 0 0 1 .841.006c.356.188.696.339 1.072.388a2.75 2.75 0 0 0 2.033-.544c.25-.192.44-.428.617-.691c.17-.254.356-.575.578-.96l.025-.044c.223-.385.408-.706.542-.98c.14-.286.25-.569.29-.88a2.75 2.75 0 0 0-.544-2.033c-.231-.301-.532-.52-.872-.734a.87.87 0 0 1-.426-.726c0-.278.152-.554.426-.726c.34-.214.64-.433.872-.734a2.75 2.75 0 0 0 .545-2.033a2.8 2.8 0 0 0-.29-.88a18 18 0 0 0-.543-.98l-.025-.044a18 18 0 0 0-.578-.96a2.8 2.8 0 0 0-.617-.69a2.75 2.75 0 0 0-2.033-.546c-.376.05-.716.2-1.072.389a.87.87 0 0 1-.84.005a.87.87 0 0 1-.417-.731c-.015-.402-.054-.772-.2-1.122a2.75 2.75 0 0 0-1.488-1.489c-.29-.12-.59-.167-.907-.188c-.304-.021-.675-.021-1.12-.021zm-1.453 1.595c.077-.032.194-.061.435-.078c.247-.017.567-.017 1.043-.017s.796 0 1.043.017c.241.017.358.046.435.078c.307.127.55.37.677.677c.04.096.073.247.086.604c.03.792.439 1.555 1.165 1.974s1.591.392 2.292.022c.316-.167.463-.214.567-.227a1.25 1.25 0 0 1 .924.247c.066.051.15.138.285.338c.139.206.299.483.537.895s.397.69.506.912c.107.217.14.333.15.416a1.25 1.25 0 0 1-.247.924c-.064.083-.178.187-.48.377c-.672.422-1.128 1.158-1.128 1.996s.456 1.574 1.128 1.996c.302.19.416.294.48.377c.202.263.29.595.247.924c-.01.083-.044.2-.15.416c-.109.223-.268.5-.506.912s-.399.689-.537.895c-.135.2-.219.287-.285.338a1.25 1.25 0 0 1-.924.247c-.104-.013-.25-.06-.567-.227c-.7-.37-1.566-.398-2.292.021s-1.135 1.183-1.165 1.975c-.013.357-.046.508-.086.604a1.25 1.25 0 0 1-.677.677c-.077.032-.194.061-.435.078c-.247.017-.567.017-1.043.017s-.796 0-1.043-.017c-.241-.017-.358-.046-.435-.078a1.25 1.25 0 0 1-.677-.677c-.04-.096-.073-.247-.086-.604c-.03-.792-.439-1.555-1.165-1.974s-1.591-.392-2.292-.022c-.316.167-.463.214-.567.227a1.25 1.25 0 0 1-.924-.247c-.066-.051-.15-.138-.285-.338a17 17 0 0 1-.537-.895c-.238-.412-.397-.69-.506-.912c-.107-.217-.14-.333-.15-.416a1.25 1.25 0 0 1 .247-.924c.064-.083.178-.187.48-.377c.672-.422 1.128-1.158 1.128-1.996s-.456-1.574-1.128-1.996c-.302-.19-.416-.294-.48-.377a1.25 1.25 0 0 1-.247-.924c.01-.083.044-.2.15-.416c.109-.223.268-.5.506-.912s.399-.689.537-.895c.135-.2.219-.287.285-.338a1.25 1.25 0 0 1 .924-.247c.104.013.25.06.567.227c.7.37 1.566.398 2.292-.022c.726-.419 1.135-1.182 1.165-1.974c.013-.357.046-.508.086-.604c.127-.307.37-.55.677-.677"/></g></svg>
            </div>
        </header>


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

