<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $restaurant = htmlspecialchars(trim($_POST["restaurant"] ?? ""));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));

    if ($name && $email && $restaurant && $message) {
        $content = "Nume: $name\n";
        $content .= "Email: $email\n";
        $content .= "Restaurant: $restaurant\n";
        $content .= "Mesaj: $message\n";
        $content .= "Data: " . date("d.m.Y H:i") . "\n";
        $content .= "-----------------------------\n";

        file_put_contents("messages.txt", $content, FILE_APPEND);
    }

    header("Location: index.php?success=1#contact");
    exit;
}

header("Location: index.php");
exit;
?>
