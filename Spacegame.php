<?php
echo "Welkom bij mijn spacegame!";
?>
/*********************************************************************
* Author: Student
* Date: 2026
* Description: Space Adventure Game
* Version: 1.0
**********************************************************************/

// WIN screen (spaceship treasure)
$win =  "        /\\\n" .
        "       /  \\\n" .
        "      /----\\\n" .
        "     |      |\n" .
        "     | GOLD |\n" .
        "     |______|\n" .
        "      /::::\\\n" .
        "     /::::::\\\n" .
        "    '--------'\n";

// Intro
printf("🚀 Welcome to the SPACE TREASURE HUNT!\n\n");
printf("       /\\\n");
printf("      /  \\\n");
printf("     /----\\\n");
printf("    | NASA |\n");
printf("    |      |\n");
printf("    |______|\n\n");

// Question 1
printf("You are in your spaceship approaching an unknown planet...\n");
printf("Option 1. Land on the dark mysterious planet\n");
printf("Option 2. Fly to a nearby space station\n");
printf("Choose 1 or 2:\n");

$userChoice = readline("");

// OPTION 1 (planet)
if ($userChoice == 1) {
    printf("\nYou land on the planet... it's quiet and eerie...\n");
    printf("You see a cave glowing with light.\n\n");

    printf("Option 1. Enter the glowing cave\n");
    printf("Option 2. Go back to your spaceship\n");
    printf("Choose 1 or 2:\n");

    $userChoice = readline("");

    if ($userChoice == 1) {
        printf("\nInside the cave you find alien treasure!!! 🎉\n\n");
        printf("%s", $win);
    }

    if ($userChoice == 2) {
        printf("\nYou return safely, but missed the treasure... THE END\n");
    }
}

// OPTION 2 (space station)
if ($userChoice == 2) {
    printf("\nYou arrive at the space station...\n");
    printf("A robot greets you.\n\n");

    printf("Option 1. Trust the robot\n");
    printf("Option 2. Ignore the robot and explore\n");
    printf("Choose 1 or 2:\n");

    $userChoice = readline("");

    if ($userChoice == 1) {
        printf("\nThe robot was evil... you got captured! THE END 💀\n");
    }

    if ($userChoice == 2) {
        printf("\nYou find a hidden vault, but it's empty... THE END\n");
    }
}
?>
