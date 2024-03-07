<?php
session_start();

if (isset($_POST['submit'])) {
    $message = $_POST['message'];
    $username = $_SESSION['username'];

    // Save message to a file or database
    // For simplicity, I'll just append to a text file
    $file = 'chatlog.txt';
    $data = $username . ": " . $message . PHP_EOL;
    file_put_contents($file, $data, FILE_APPEND);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
</head>

<body>

    <div id="chat">
        <div id="messages">
            <?php
            // Display chat log
            $file = 'chatlog.txt';
            if (file_exists($file)) {
                echo file_get_contents($file);
            }
            ?>
        </div>
        <!--
// v0 by Vercel.
// https://v0.dev/t/VYy8Z3xavus
-->
        <div class="flex flex-col h-screen border-t">
            <header class="flex items-center justify-between p-4 border-b">
                <div class="flex items-center space-x-4"><button
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 w-10 rounded-full"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-6 h-6">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg><span class="sr-only">Back to chats</span></button>
                    <div class="space-y-1">
                        <h1 class="text-lg font-bold">Alice Johnson</h1>
                        <p class="text-sm leading-none text-gray-500 dark:text-gray-400">
                            Online
                        </p>
                    </div>
                </div><button 
                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10 rounded-full"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-5 h-5">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                    </svg><span class="sr-only">More options</span></button>
            </header>
            <div class="flex-1 overflow-hidden">
                <div class="grid grid-rows-[1fr auto] gap-px">
                    <div class="flex-1 flex flex-col justify-end p-4 overflow-auto">
                        <div class="grid gap-4">
                            <div class="flex flex-col items-end gap-1">
                                <div class="flex items-center gap-2 text-sm">
                                    <div class="rounded-full bg-gray-100 px-3 py-2 dark:bg-gray-800">
                                        Hi there! 👋
                                    </div><time class="text-xs text-gray-500 dark:text-gray-400">
                                        2:14pm
                                    </time>
                                </div>
                                <div class="text-sm text-right text-gray-500 dark:text-gray-400">
                                    Alice Johnson
                                </div>
                            </div>
                            <div class="flex flex-col items-start gap-1">
                                <div class="flex items-center gap-2 text-sm">
                                    <div class="rounded-full bg-gray-100 px-3 py-2 dark:bg-gray-800">
                                        Hey! How's your day going?
                                    </div><time class="text-xs text-gray-500 dark:text-gray-400">
                                        2:15pm
                                    </time>
                                </div>
                                <div class="text-sm text-right text-gray-500 dark:text-gray-400">
                                    You
                                </div>
                            </div>
                            <div class="flex flex-col items-end gap-1">
                                <div class="flex items-center gap-2 text-sm">
                                    <div class="rounded-full bg-gray-100 px-3 py-2 dark:bg-gray-800">
                                        Not too bad! Just finished a meeting. 😅
                                    </div><time class="text-xs text-gray-500 dark:text-gray-400">
                                        2:16pm
                                    </time>
                                </div>
                                <div class="text-sm text-right text-gray-500 dark:text-gray-400">
                                    Alice Johnson
                                </div>
                            </div>
                            <div class="flex flex-col items-start gap-1">
                                <div class="flex items-center gap-2 text-sm">
                                    <div class="rounded-full bg-gray-100 px-3 py-2 dark:bg-gray-800">
                                        Nice! I'm just grabbing a coffee. ☕️
                                    </div><time class="text-xs text-gray-500 dark:text-gray-400">
                                        2:17pm
                                    </time>
                                </div>
                                <div class="text-sm text-right text-gray-500 dark:text-gray-400">
                                    You
                                </div>
                            </div>
                            <div class="flex flex-col items-end gap-1">
                                <div class="flex items-center gap-2 text-sm">
                                    <div class="rounded-full bg-gray-100 px-3 py-2 dark:bg-gray-800">
                                        Sounds good! Enjoy your coffee. 😊
                                    </div><time class="text-xs text-gray-500 dark:text-gray-400">
                                        2:18pm
                                    </time>
                                </div>
                                <div class="text-sm text-right text-gray-500 dark:text-gray-400">
                                    Alice Johnson
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-t">
                        <form class="flex" action="#" method="post">
                            <div class="flex-1 min-h-[40px]"><label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 sr-only"
                                    for="message">
                                    Message
                                </label><textarea
                                    class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 resize-none"
                                    id="message" placeholder="Type a message..."></textarea></div><button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 ml-4"
                                type="submit">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Automatically scroll to bottom of chat
            var chatMessages = document.getElementById("messages");
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Submit form using AJAX
            document.getElementById("messageForm").addEventListener("submit", function (event) {
                event.preventDefault();
                var message = document.getElementById("messageInput").value;

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Clear input field after message sent
                        document.getElementById("messageInput").value = "";
                    }
                };
                xhr.send("message=" + message);
            });
        </script>

</body>

</html>