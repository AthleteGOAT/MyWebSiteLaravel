I created a simple auth system connected to DB mySQL , passwords aree secured by using sha256 and salt.  
Authentiticated users data are stored in session memory.
All available DB settings are located in .env file.
Auth protection is ensured by "middleware('isLogged')", by adding this line of code in the desired web.php route.
Every input field from login and register are ensured by Laravel request.

UPDATED!!!
Added blog website about cats with posibility to create new post using own data.

<img width="1708" alt="Screenshot 2024-01-29 at 21 14 06" src="https://github.com/AthleteGOAT/MyWebSiteLaravel/assets/144588394/56b0cabc-b549-46aa-b26a-d01a5665d9f4">
<img width="1710" alt="Screenshot 2024-01-29 at 21 14 17" src="https://github.com/AthleteGOAT/MyWebSiteLaravel/assets/144588394/22761caf-92b8-426d-a522-6615dfa97332">
<img width="1706" alt="Screenshot 2024-01-30 at 10 43 31" src="https://github.com/AthleteGOAT/MyWebSiteLaravel/assets/144588394/fe288937-d293-4a33-8f46-96862e1cd4df">
