# CHALLENGE - Mitigate the SSRF vulnerability

During the lesson we learned how to mitigate an SSRF vulnerability using an allow list of domains. Your challenge is to implement this mitigation strategy (or a different one of your choosing) in PHP using the provided validateUrl function located in the App.php file.

### Hint

Use the parse_url() function to extract the host name.

## Setup instructions

Run the below commands to create and start the containers.

```
docker-compose up -d --build
```

```
docker compose exec web-server npm install
```

```
docker compose exec web-server npm run dev
```

Navigate to `http://localhost` in a browser.

## Deliverables

Send the following to me via email or teams:

1. A screenshot of your code solution
2. The result of the solution in a browser

Or alternatively, you may show me your solution in person before the deadline.
