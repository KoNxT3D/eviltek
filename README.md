[✨] InfoScan Information Gathering Tool [✨]<br>
[✔] Version: 1.0.2<br>
By: EvilTek Software and Security<br>
https://eviltek.net/<br>

InfoScan Information Gathering Tool gathers information on selected hosts from two lists.<br>
This allows for multiple domains to be scanned and can take some time if you're using a<br>
long list of URLs and Domains.<br><br>

The first list: url-list.txt contains the URLs of the sites you wish to gather information on.<br>
The second list: domains.txt contains the domains name to be used.<br>
Examples have been included in both files, so edit to suit.<br><br>

Use:<br>
make sure that all files within the src folder are either chmod +x or +a as well as the infoscan file itself.<br>
By default these files come with the chmod +x permissions set.<br><br>

Open a terminal from the InfoScan directory and run InfoScan.<br>
$ ./InfoScan<br><br>

InfoScan will generate the necessary folders and the information will then be gathered
and distrubuted into those folders.<br><br>

Php Files:<br>
index.php is the InfoScan Web UI and can be used to scan a single domain.<br>
You must be running Apache with Php to use this file, or upload to your server if your<br>
server allows the whois and traceroute features.<br><br>

If you don't know if your server allows these features, upload the directory and access<br>
the URL in a browser, enter a domain name ie; google.com and if your results only produce<br>
ping results then your server does not support whois or traceroute.<br><br>

NOTES:<br>
If you're using a VPN, Proxy or Proxychains you may get odd results as well as slower<br>
result times.<br>
