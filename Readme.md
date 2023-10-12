# PHP-OpenAI-API-Curl

A lightweight PHP script utilizing cURL to interact with the OpenAI API, enabling developers to integrate GPT-powered conversational agents without dependencies.

## Prerequisites

- PHP 7.0 or higher
- cURL enabled in PHP

## Getting Started

#### 1. Clone the Repository
Use Git to clone the repository directly to your local machine.

```sh
git clone https://github.com/yourusername/PHP-OpenAI-API-Curl.git
```

#### 2. Download the Code
Navigate to the [repository](https://github.com/yourusername/PHP-OpenAI-API-Curl) and use the "Code" button to download a zip file of the project, which you can then extract to your local machine.

#### 3. Copy and Paste
Simply navigate to the PHP file in the GitHub repository, view the raw code, and copy/paste it into a new file in your own development environment.

Choose the method that best suits your workflow and proceed to configure your API key and modify your prompts as needed.

## Setup

1. **Configure API Key**

   Replace `"your-api-key-here"` in the PHP script with your actual API key obtained from [OpenAI](https://beta.openai.com/signup/).

   ```php
   $api_key = "your-api-key-here";
   ```

## Usage

1. **Modify the Prompt**

   Replace `'your-prompt-here'` in the PHP script with the prompt you want to use.

   ```php
   ['role' => 'user', 'content' => 'your-prompt-here']
   ```

2. **Execute the Script**

   Run the PHP script using a server or local development environment.

   ```sh
   php your-script-name.php
   ```

## Response Handling

The script returns the model's response as a string. For custom handling, modify the following section in the script:

```php
echo $decoded_response['choices'][0]['message']['content'];
```

## Contributing

Feel free to fork the project and submit your contributions via a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Disclaimer

This script utilizes the OpenAI API and may incur costs. Ensure to review the pricing details on [OpenAI's Pricing Page](https://openai.com/pricing).
