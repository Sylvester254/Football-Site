# Manchester United FC Website
> This website is a simple yet comprehensive platform for Manchester United FC fans and users who want to get information about the club, its squad, history, management, and news.

## Initial Requirements
> The following requirements were provided at the beginning of the project:

- Display club details.
- Display a list of club news.
- Display the club's squad with player details.
- Display the club's history and important dates.
- Display club management details.
- Implement user authentication for sign-up and login.
- Use JSON files to store data instead of a database.
- All of these requirements have been implemented in the website, with separate pages for each of the components. JSON files are used to store data for club details, news, squad, history, and management information.

## Setting Up the Environment
> To set up the environment and run the server for this website, follow the steps below:

- Make sure you have PHP installed on your local machine. You can install XAMPP or WAMP for an all-in-one solution.

- Download the project's repository(Football-Site) to your local machine.

- Place the project folder in the htdocs (for XAMPP) or www (for WAMP) directory.

- Start your web server.

- Open your web browser and navigate to `http://localhost/Football-Site/site/club_details.php` to start interacting with the Manchester United FC site.

## Project Structure
> The website is organized into the following main sections:

- club_details.php: Displays the club details, such as the name, logo, stadium, kits, league and other descriptions. Data is fetched from jsons/club_details.json.
- club_news.php: Lists the club news items. Data is fetched from jsons/news.json. Users can click on each link to read more.
- squad.php: Shows the club's squad with player details. Users can click on each player to see more information. 
- player_details.php: Displays individual player's information. Data is fetched from individual JSON files in the players directory. users can also comment about the player and the comments will be saved in comments.json where they'll be retrieved and displayed below player's information.
- club_history.php: Presents the club's history, important dates, and milestones. Data is fetched from jsons/history.json.
- club_management.php: Provides information about the club's management. Data is fetched from jsons/management.json.
- user_login.php and user_signup.php: Handle user authentication for login and sign-up. User data is stored in JSON format in users directory.

Additionally, there are supporting files for styling, session handling, and helper functions.

## Customization
You can easily customize the website by modifying the data in the JSON files. Update the club details, news, squad, add player details, history, and management information to fit your needs.

