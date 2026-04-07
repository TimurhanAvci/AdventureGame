<?php
// Display a welcome message when the player starts the game
echo "Welkom bij mijn spacegame!";
?>

/*********************************************************************
* Author: Student
* Date: 2026
* Description: Space Adventure Game
* Version: 1.0
**********************************************************************/

// Create a variable $win to store ASCII art of a treasure
// This will be shown if the player finds the treasure
$win =  "        /\\\n" .        // top of the treasure box
        "       /  \\\n" .      // sides of the treasure box
        "      /----\\\n" .     // lid of the treasure box
        "     |      |\n" .    // blank part of the box
        "     | GOLD |\n" .    // word "GOLD" inside the box
        "     |______|\n" .    // bottom of the treasure box
        "      /::::\\\n" .    // base of the treasure
        "     /::::::\\\n" .   // base of the treasure
        "    '--------'\n";    // bottom line

// Print the game intro message
printf("🚀 Welcome to the SPACE TREASURE HUNT!\n\n");

// Print ASCII art of a spaceship
printf("       /\\\n");         // top of spaceship
printf("      /  \\\n");       // middle of spaceship
printf("     /----\\\n");      // bottom of top part
printf("    | NASA |\n");      // label "NASA" on spaceship
printf("    |      |\n");      // empty space
printf("    |______|\n\n");    // bottom of spaceship

// First scenario description
printf("You are in your spaceship approaching an unknown planet...\n");

// Give player first choice
printf("Option 1. Land on the dark mysterious planet\n");
printf("Option 2. Fly to a nearby space station\n");
printf("Choose 1 or 2:\n");

// Store player's input in $userChoice
$userChoice = readline("");

// OPTION 1: If player chooses 1 (land on the planet)
if ($userChoice == 1) {
    // Describe the planet landing
    printf("\nYou land on the planet... it's quiet and eerie...\n");
    printf("You see a cave glowing with light.\n\n");

    // Give second choice on the planet
    printf("Option 1. Enter the glowing cave\n");
    printf("Option 2. Go back to your spaceship\n");
    printf("Choose 1 or 2:\n");

    // Store player's choice for the second scenario
    $userChoice = readline("");

    // If player enters the cave
    if ($userChoice == 1) {
        // Player finds the treasure → print success message
        printf("\nInside the cave you find alien treasure!!! 🎉\n\n");
        // Display ASCII art of treasure
        printf("%s", $win);
    }

    // If player goes back to the spaceship
    if ($userChoice == 2) {
        // Print game over message
        printf("\nYou return safely, but missed the treasure... THE END\n");
    }
}

// OPTION 2: If player chooses 2 (go to space station)
if ($userChoice == 2) {
    // Describe arrival at the space station
    printf("\nYou arrive at the space station...\n");
    printf("A robot greets you.\n\n");

    // Give second choice at the space station
    printf("Option 1. Trust the robot\n");
    printf("Option 2. Ignore the robot and explore\n");
    printf("Choose 1 or 2:\n");

    // Store player's choice for space station scenario
    $userChoice = readline("");

    // If player trusts the robot
    if ($userChoice == 1) {
        // Robot is evil → player gets captured → game over
        printf("\nThe robot was evil... you got captured! THE END 💀\n");
    }

    // If player ignores the robot
    if ($userChoice == 2) {
        // Player finds vault but it is empty → game over
        printf("\nYou find a hidden vault, but it's empty... THE END\n");
    }
}
?>
