import requests , json

url = 'http://localhost/CORS-vuln-Case-5.php'
headers = {'Access-Control-Request-Method': 'PUT',
	'Access-Control-Request-Headers' : 'Content-Type, Authorization, X-Requested-With'
}

# if u want Open burpsuite And Show The Request And The Respose
# proxy = {"http" : "http://127.0.0.1:8080"}
# and add this in  proxies=proxy
# response = requests.options(url, headers=headers  ,proxies=proxy )

response = requests.options(url, headers=headers )

headers = response.headers

for i in headers:
    print (f"{i} : {headers[i]}")