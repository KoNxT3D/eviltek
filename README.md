[✨] InfoScan Information Gathering Tool [✨]
[✔] Version: 1.0.2
By: EvilTek Software and Security
https://eviltek.net/

InfoScan Information Gathering Tool gathers information on selected hosts from two lists.
This allows for multiple domains to be scanned and can take some time if you're using a
long list of URLs and Domains.

The first list: url-list.txt contains the URLs of the sites you wish to gather information on.
The second list: domains.txt contains the domains name to be used.
Examples have been included in both files, so edit to suit.

Use:
make sure that all files within the src folder are either chmod +x or +a as well as the infoscan file itself.
By default these files come with the chmod +x permissions set.

Open a terminal from the InfoScan directory and run InfoScan.
$ ./InfoScan

InfoScan will generate the necessary folders and the information will then be gathered
and distrubuted into those folders.

Php Files:
index.php is the InfoScan Web UI and can be used to scan a single domain.
You must be running Apache with Php to use this file, or upload to your server if your
server allows the whois and traceroute features.

If you don't know if your server allows these features, upload the directory and access
the URL in a browser, enter a domain name ie; google.com and if your results only produce
ping results then your server does not support whois or traceroute.

NOTES:
If you're using a VPN, Proxy or Proxychains you may get odd results as well as slower
result times.
