<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Register</title>
</head>
<body class="bg-green-300 flex justify-center">

    <svg class="absolute top-16" width="246" height="73" viewBox="0 0 246 73" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="path-1-outside-1" maskUnits="userSpaceOnUse" x="0.160004" y="0.832001" width="246" height="72" fill="black">
        <rect fill="white" x="0.160004" y="0.832001" width="246" height="72"/>
        <path d="M5.592 50.336C8.376 50 10.584 49.352 12.216 48.392V9.512C10.536 8.552 8.184 7.904 5.16 7.568L5.52 4.976H24.024C35.016 4.976 40.512 9.2 40.512 17.648C40.512 20.816 39.696 23.384 38.064 25.352C36.48 27.32 33.984 28.712 30.576 29.528C31.488 30.104 32.28 30.896 32.952 31.904C33.672 32.912 34.368 34.184 35.04 35.72L40.728 48.392C42.168 49.352 44.184 49.976 46.776 50.264L46.344 53H35.472L29.208 36.944C28.392 34.88 27.672 33.44 27.048 32.624C26.472 31.808 25.704 31.28 24.744 31.04C23.784 30.752 22.2 30.608 19.992 30.608H18.552V48.392C19.272 48.824 20.16 49.208 21.216 49.544C22.272 49.832 23.712 50.096 25.536 50.336L25.176 53H5.232L5.592 50.336ZM20.784 27.296C25.296 27.296 28.632 26.504 30.792 24.92C32.952 23.288 34.032 20.816 34.032 17.504C34.032 14.336 33.168 11.96 31.44 10.376C29.76 8.744 27.264 7.928 23.952 7.928C22.32 7.928 20.52 8.096 18.552 8.432V27.296H20.784Z"/>
        <path d="M62.9546 53.504C57.5786 53.504 53.7146 52.04 51.3626 49.112C49.0586 46.136 47.9066 41.72 47.9066 35.864C47.9066 30.536 49.1786 26.36 51.7226 23.336C54.3146 20.264 58.0586 18.728 62.9546 18.728C67.7066 18.728 71.0426 19.976 72.9626 22.472C74.8826 24.968 75.9146 28.664 76.0586 33.56L74.5466 35.504H54.5306V35.864C54.5306 38.984 54.7226 41.528 55.1066 43.496C55.4906 45.464 56.3306 47.048 57.6266 48.248C58.9226 49.4 60.8426 49.976 63.3866 49.976C65.3066 49.976 67.0586 49.616 68.6426 48.896C70.2266 48.176 71.5466 47.408 72.6026 46.592L74.4026 48.752C73.2026 49.856 71.6426 50.936 69.7226 51.992C67.8026 53 65.5466 53.504 62.9546 53.504ZM69.5786 32.336C69.5786 28.544 69.0746 25.808 68.0666 24.128C67.1066 22.448 65.3066 21.608 62.6666 21.608C59.9306 21.608 57.9146 22.616 56.6186 24.632C55.3226 26.6 54.6266 29.336 54.5306 32.84L69.5786 32.336Z"/>
        <path d="M94.5919 68.768C89.5039 68.768 85.6639 67.952 83.0719 66.32C80.5279 64.688 79.2559 62.48 79.2559 59.696C79.2559 58.016 79.4479 56.672 79.8319 55.664C80.2159 54.656 80.7919 53.816 81.5599 53.144C82.3279 52.472 83.4079 51.752 84.7999 50.984C83.7439 49.784 83.2159 48.176 83.2159 46.16L89.1199 41.984C86.2879 41.312 84.0799 40.016 82.4959 38.096C80.9599 36.128 80.1919 33.704 80.1919 30.824C80.1919 26.888 81.2959 23.912 83.5039 21.896C85.7119 19.832 88.9999 18.8 93.3679 18.8C96.6799 18.8 99.3679 19.376 101.432 20.528C103.16 20 104.024 19.064 104.024 17.72C104.024 17.24 103.832 16.76 103.448 16.28C103.112 15.8 102.632 15.416 102.008 15.128C102.008 14.408 102.296 13.832 102.872 13.4C103.496 12.92 104.336 12.68 105.392 12.68C106.496 12.68 107.36 13.016 107.984 13.688C108.656 14.312 108.992 15.176 108.992 16.28C108.992 17.72 108.56 18.992 107.696 20.096C106.832 21.152 105.584 21.968 103.952 22.544C105.728 24.512 106.616 27.272 106.616 30.824C106.616 34.376 105.416 37.208 103.016 39.32C100.664 41.384 97.4479 42.416 93.3679 42.416H92.3599L89.3359 46.16C89.4319 46.88 89.7919 47.384 90.4159 47.672C91.0879 47.96 92.2639 48.128 93.9439 48.176H96.9679C101.384 48.176 104.624 49.184 106.688 51.2C108.8 53.168 109.856 55.688 109.856 58.76C109.856 61.976 108.584 64.448 106.04 66.176C103.544 67.904 99.7279 68.768 94.5919 68.768ZM93.3679 39.464C95.7199 39.464 97.4239 38.768 98.4799 37.376C99.5359 35.984 100.064 33.728 100.064 30.608C100.064 27.488 99.5359 25.232 98.4799 23.84C97.4239 22.4 95.7199 21.68 93.3679 21.68C91.0159 21.68 89.3119 22.4 88.2559 23.84C87.1999 25.232 86.6719 27.488 86.6719 30.608C86.6719 33.728 87.1999 35.984 88.2559 37.376C89.3119 38.768 91.0159 39.464 93.3679 39.464ZM94.5919 65.816C100.352 65.816 103.232 63.464 103.232 58.76C103.232 56.792 102.536 55.352 101.144 54.44C99.7999 53.528 97.8319 53.072 95.2399 53.072H89.1199C86.9599 54.464 85.8799 56.36 85.8799 58.76C85.8799 61.112 86.6239 62.864 88.1119 64.016C89.5999 65.216 91.7599 65.816 94.5919 65.816Z"/>
        <path d="M113.167 50.408C114.271 50.216 115.159 50 115.831 49.76C116.503 49.52 117.199 49.136 117.919 48.608V27.872C117.919 26.096 117.535 24.896 116.767 24.272C116.047 23.6 114.751 23.216 112.879 23.12L113.095 21.032C115.015 20.696 116.983 20.216 118.999 19.592C121.063 18.968 122.263 18.608 122.599 18.512L124.039 19.304V48.608C125.239 49.472 126.919 50.12 129.079 50.552L128.791 53H112.879L113.167 50.408ZM120.151 13.184C117.655 13.184 116.407 11.792 116.407 9.008C116.407 6.224 117.655 4.832 120.151 4.832C121.399 4.832 122.335 5.192 122.959 5.912C123.631 6.632 123.967 7.664 123.967 9.008C123.967 10.352 123.631 11.384 122.959 12.104C122.335 12.824 121.399 13.184 120.151 13.184Z"/>
        <path d="M143.863 53.432C142.183 53.432 140.239 53.168 138.031 52.64C135.871 52.064 134.239 51.416 133.135 50.696V41.84L136.952 41.336C137.144 43.352 137.36 44.96 137.6 46.16C137.888 47.312 138.32 48.416 138.896 49.472C140.432 49.952 142.279 50.192 144.439 50.192C146.407 50.192 148.016 49.664 149.264 48.608C150.512 47.552 151.135 46.232 151.135 44.648C151.135 43.064 150.512 41.888 149.264 41.12C148.064 40.304 146.143 39.44 143.503 38.528C141.295 37.76 139.495 37.016 138.104 36.296C136.76 35.576 135.608 34.544 134.648 33.2C133.688 31.856 133.208 30.128 133.208 28.016C133.208 25.136 134.264 22.88 136.376 21.248C138.536 19.616 141.488 18.8 145.232 18.8C147.248 18.8 149.095 19.112 150.775 19.736C152.503 20.36 153.872 21.224 154.88 22.328C155.888 23.384 156.391 24.56 156.391 25.856C156.391 28.352 155.287 29.6 153.079 29.6C152.167 29.6 151.399 29.456 150.775 29.168C150.199 28.832 149.671 28.328 149.191 27.656C150.007 27.08 150.415 26.216 150.415 25.064C150.415 24.056 149.864 23.24 148.76 22.616C147.704 21.992 146.383 21.68 144.799 21.68C142.879 21.68 141.368 22.112 140.264 22.976C139.16 23.84 138.607 25.016 138.607 26.504C138.607 27.704 138.968 28.712 139.688 29.528C140.456 30.296 141.368 30.92 142.424 31.4C143.48 31.88 144.992 32.456 146.96 33.128C149.024 33.896 150.703 34.64 151.999 35.36C153.343 36.08 154.471 37.088 155.383 38.384C156.295 39.632 156.751 41.24 156.751 43.208C156.751 46.424 155.624 48.944 153.368 50.768C151.112 52.544 147.943 53.432 143.863 53.432Z"/>
        <path d="M173.715 53.72C170.499 53.72 168.315 53.048 167.163 51.704C166.011 50.36 165.435 48.08 165.435 44.864V23.264H159.603V21.104C164.259 19.52 167.331 16.616 168.819 12.392H171.699V19.376H180.915V23.264H171.627V45.368C171.627 47.144 171.843 48.416 172.275 49.184C172.755 49.952 173.811 50.336 175.443 50.336C176.499 50.336 177.411 50.216 178.179 49.976C178.947 49.688 179.715 49.328 180.483 48.896L181.923 51.056C180.915 51.776 179.787 52.4 178.539 52.928C177.339 53.456 175.731 53.72 173.715 53.72Z"/>
        <path d="M198.728 53.504C193.352 53.504 189.488 52.04 187.136 49.112C184.832 46.136 183.68 41.72 183.68 35.864C183.68 30.536 184.952 26.36 187.496 23.336C190.088 20.264 193.832 18.728 198.728 18.728C203.48 18.728 206.816 19.976 208.736 22.472C210.656 24.968 211.688 28.664 211.832 33.56L210.32 35.504H190.304V35.864C190.304 38.984 190.496 41.528 190.88 43.496C191.264 45.464 192.104 47.048 193.4 48.248C194.696 49.4 196.616 49.976 199.16 49.976C201.08 49.976 202.832 49.616 204.416 48.896C206 48.176 207.32 47.408 208.376 46.592L210.176 48.752C208.976 49.856 207.416 50.936 205.496 51.992C203.576 53 201.32 53.504 198.728 53.504ZM205.352 32.336C205.352 28.544 204.848 25.808 203.84 24.128C202.88 22.448 201.08 21.608 198.44 21.608C195.704 21.608 193.688 22.616 192.392 24.632C191.096 26.6 190.4 29.336 190.304 32.84L205.352 32.336Z"/>
        <path d="M215.893 50.408C216.997 50.216 217.885 50 218.557 49.76C219.229 49.52 219.925 49.112 220.645 48.536V28.016C220.645 26.24 220.261 25.04 219.493 24.416C218.773 23.744 217.477 23.36 215.605 23.264L215.821 21.176C217.309 20.888 219.445 20.312 222.229 19.448L224.605 18.728L225.901 19.376L226.621 24.416C227.725 22.736 229.021 21.368 230.509 20.312C231.997 19.256 233.581 18.728 235.261 18.728C236.989 18.728 238.477 19.232 239.725 20.24C241.021 21.248 241.669 22.688 241.669 24.56C241.669 25.76 241.309 26.816 240.589 27.728C239.917 28.64 239.005 29.096 237.853 29.096C237.037 29.096 236.269 28.904 235.549 28.52C234.829 28.088 234.373 27.536 234.181 26.864C234.373 26.672 234.541 26.384 234.685 26C234.829 25.568 234.901 25.184 234.901 24.848C234.901 23.408 234.229 22.688 232.885 22.688C232.021 22.688 231.109 23.144 230.149 24.056C229.189 24.968 228.373 26.144 227.701 27.584C227.077 28.976 226.765 30.392 226.765 31.832V48.536C228.061 49.4 229.957 50.072 232.453 50.552L232.165 53H215.605L215.893 50.408Z"/>
        </mask>
        <path d="M5.592 50.336C8.376 50 10.584 49.352 12.216 48.392V9.512C10.536 8.552 8.184 7.904 5.16 7.568L5.52 4.976H24.024C35.016 4.976 40.512 9.2 40.512 17.648C40.512 20.816 39.696 23.384 38.064 25.352C36.48 27.32 33.984 28.712 30.576 29.528C31.488 30.104 32.28 30.896 32.952 31.904C33.672 32.912 34.368 34.184 35.04 35.72L40.728 48.392C42.168 49.352 44.184 49.976 46.776 50.264L46.344 53H35.472L29.208 36.944C28.392 34.88 27.672 33.44 27.048 32.624C26.472 31.808 25.704 31.28 24.744 31.04C23.784 30.752 22.2 30.608 19.992 30.608H18.552V48.392C19.272 48.824 20.16 49.208 21.216 49.544C22.272 49.832 23.712 50.096 25.536 50.336L25.176 53H5.232L5.592 50.336ZM20.784 27.296C25.296 27.296 28.632 26.504 30.792 24.92C32.952 23.288 34.032 20.816 34.032 17.504C34.032 14.336 33.168 11.96 31.44 10.376C29.76 8.744 27.264 7.928 23.952 7.928C22.32 7.928 20.52 8.096 18.552 8.432V27.296H20.784Z" stroke="#044C03" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M62.9546 53.504C57.5786 53.504 53.7146 52.04 51.3626 49.112C49.0586 46.136 47.9066 41.72 47.9066 35.864C47.9066 30.536 49.1786 26.36 51.7226 23.336C54.3146 20.264 58.0586 18.728 62.9546 18.728C67.7066 18.728 71.0426 19.976 72.9626 22.472C74.8826 24.968 75.9146 28.664 76.0586 33.56L74.5466 35.504H54.5306V35.864C54.5306 38.984 54.7226 41.528 55.1066 43.496C55.4906 45.464 56.3306 47.048 57.6266 48.248C58.9226 49.4 60.8426 49.976 63.3866 49.976C65.3066 49.976 67.0586 49.616 68.6426 48.896C70.2266 48.176 71.5466 47.408 72.6026 46.592L74.4026 48.752C73.2026 49.856 71.6426 50.936 69.7226 51.992C67.8026 53 65.5466 53.504 62.9546 53.504ZM69.5786 32.336C69.5786 28.544 69.0746 25.808 68.0666 24.128C67.1066 22.448 65.3066 21.608 62.6666 21.608C59.9306 21.608 57.9146 22.616 56.6186 24.632C55.3226 26.6 54.6266 29.336 54.5306 32.84L69.5786 32.336Z" stroke="#044C03" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M94.5919 68.768C89.5039 68.768 85.6639 67.952 83.0719 66.32C80.5279 64.688 79.2559 62.48 79.2559 59.696C79.2559 58.016 79.4479 56.672 79.8319 55.664C80.2159 54.656 80.7919 53.816 81.5599 53.144C82.3279 52.472 83.4079 51.752 84.7999 50.984C83.7439 49.784 83.2159 48.176 83.2159 46.16L89.1199 41.984C86.2879 41.312 84.0799 40.016 82.4959 38.096C80.9599 36.128 80.1919 33.704 80.1919 30.824C80.1919 26.888 81.2959 23.912 83.5039 21.896C85.7119 19.832 88.9999 18.8 93.3679 18.8C96.6799 18.8 99.3679 19.376 101.432 20.528C103.16 20 104.024 19.064 104.024 17.72C104.024 17.24 103.832 16.76 103.448 16.28C103.112 15.8 102.632 15.416 102.008 15.128C102.008 14.408 102.296 13.832 102.872 13.4C103.496 12.92 104.336 12.68 105.392 12.68C106.496 12.68 107.36 13.016 107.984 13.688C108.656 14.312 108.992 15.176 108.992 16.28C108.992 17.72 108.56 18.992 107.696 20.096C106.832 21.152 105.584 21.968 103.952 22.544C105.728 24.512 106.616 27.272 106.616 30.824C106.616 34.376 105.416 37.208 103.016 39.32C100.664 41.384 97.4479 42.416 93.3679 42.416H92.3599L89.3359 46.16C89.4319 46.88 89.7919 47.384 90.4159 47.672C91.0879 47.96 92.2639 48.128 93.9439 48.176H96.9679C101.384 48.176 104.624 49.184 106.688 51.2C108.8 53.168 109.856 55.688 109.856 58.76C109.856 61.976 108.584 64.448 106.04 66.176C103.544 67.904 99.7279 68.768 94.5919 68.768ZM93.3679 39.464C95.7199 39.464 97.4239 38.768 98.4799 37.376C99.5359 35.984 100.064 33.728 100.064 30.608C100.064 27.488 99.5359 25.232 98.4799 23.84C97.4239 22.4 95.7199 21.68 93.3679 21.68C91.0159 21.68 89.3119 22.4 88.2559 23.84C87.1999 25.232 86.6719 27.488 86.6719 30.608C86.6719 33.728 87.1999 35.984 88.2559 37.376C89.3119 38.768 91.0159 39.464 93.3679 39.464ZM94.5919 65.816C100.352 65.816 103.232 63.464 103.232 58.76C103.232 56.792 102.536 55.352 101.144 54.44C99.7999 53.528 97.8319 53.072 95.2399 53.072H89.1199C86.9599 54.464 85.8799 56.36 85.8799 58.76C85.8799 61.112 86.6239 62.864 88.1119 64.016C89.5999 65.216 91.7599 65.816 94.5919 65.816Z" stroke="#044C03" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M113.167 50.408C114.271 50.216 115.159 50 115.831 49.76C116.503 49.52 117.199 49.136 117.919 48.608V27.872C117.919 26.096 117.535 24.896 116.767 24.272C116.047 23.6 114.751 23.216 112.879 23.12L113.095 21.032C115.015 20.696 116.983 20.216 118.999 19.592C121.063 18.968 122.263 18.608 122.599 18.512L124.039 19.304V48.608C125.239 49.472 126.919 50.12 129.079 50.552L128.791 53H112.879L113.167 50.408ZM120.151 13.184C117.655 13.184 116.407 11.792 116.407 9.008C116.407 6.224 117.655 4.832 120.151 4.832C121.399 4.832 122.335 5.192 122.959 5.912C123.631 6.632 123.967 7.664 123.967 9.008C123.967 10.352 123.631 11.384 122.959 12.104C122.335 12.824 121.399 13.184 120.151 13.184Z" stroke="#044C03" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M143.863 53.432C142.183 53.432 140.239 53.168 138.031 52.64C135.871 52.064 134.239 51.416 133.135 50.696V41.84L136.952 41.336C137.144 43.352 137.36 44.96 137.6 46.16C137.888 47.312 138.32 48.416 138.896 49.472C140.432 49.952 142.279 50.192 144.439 50.192C146.407 50.192 148.016 49.664 149.264 48.608C150.512 47.552 151.135 46.232 151.135 44.648C151.135 43.064 150.512 41.888 149.264 41.12C148.064 40.304 146.143 39.44 143.503 38.528C141.295 37.76 139.495 37.016 138.104 36.296C136.76 35.576 135.608 34.544 134.648 33.2C133.688 31.856 133.208 30.128 133.208 28.016C133.208 25.136 134.264 22.88 136.376 21.248C138.536 19.616 141.488 18.8 145.232 18.8C147.248 18.8 149.095 19.112 150.775 19.736C152.503 20.36 153.872 21.224 154.88 22.328C155.888 23.384 156.391 24.56 156.391 25.856C156.391 28.352 155.287 29.6 153.079 29.6C152.167 29.6 151.399 29.456 150.775 29.168C150.199 28.832 149.671 28.328 149.191 27.656C150.007 27.08 150.415 26.216 150.415 25.064C150.415 24.056 149.864 23.24 148.76 22.616C147.704 21.992 146.383 21.68 144.799 21.68C142.879 21.68 141.368 22.112 140.264 22.976C139.16 23.84 138.607 25.016 138.607 26.504C138.607 27.704 138.968 28.712 139.688 29.528C140.456 30.296 141.368 30.92 142.424 31.4C143.48 31.88 144.992 32.456 146.96 33.128C149.024 33.896 150.703 34.64 151.999 35.36C153.343 36.08 154.471 37.088 155.383 38.384C156.295 39.632 156.751 41.24 156.751 43.208C156.751 46.424 155.624 48.944 153.368 50.768C151.112 52.544 147.943 53.432 143.863 53.432Z" stroke="#044C03" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M173.715 53.72C170.499 53.72 168.315 53.048 167.163 51.704C166.011 50.36 165.435 48.08 165.435 44.864V23.264H159.603V21.104C164.259 19.52 167.331 16.616 168.819 12.392H171.699V19.376H180.915V23.264H171.627V45.368C171.627 47.144 171.843 48.416 172.275 49.184C172.755 49.952 173.811 50.336 175.443 50.336C176.499 50.336 177.411 50.216 178.179 49.976C178.947 49.688 179.715 49.328 180.483 48.896L181.923 51.056C180.915 51.776 179.787 52.4 178.539 52.928C177.339 53.456 175.731 53.72 173.715 53.72Z" stroke="#044C03" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M198.728 53.504C193.352 53.504 189.488 52.04 187.136 49.112C184.832 46.136 183.68 41.72 183.68 35.864C183.68 30.536 184.952 26.36 187.496 23.336C190.088 20.264 193.832 18.728 198.728 18.728C203.48 18.728 206.816 19.976 208.736 22.472C210.656 24.968 211.688 28.664 211.832 33.56L210.32 35.504H190.304V35.864C190.304 38.984 190.496 41.528 190.88 43.496C191.264 45.464 192.104 47.048 193.4 48.248C194.696 49.4 196.616 49.976 199.16 49.976C201.08 49.976 202.832 49.616 204.416 48.896C206 48.176 207.32 47.408 208.376 46.592L210.176 48.752C208.976 49.856 207.416 50.936 205.496 51.992C203.576 53 201.32 53.504 198.728 53.504ZM205.352 32.336C205.352 28.544 204.848 25.808 203.84 24.128C202.88 22.448 201.08 21.608 198.44 21.608C195.704 21.608 193.688 22.616 192.392 24.632C191.096 26.6 190.4 29.336 190.304 32.84L205.352 32.336Z" stroke="#044C03" stroke-width="8" mask="url(#path-1-outside-1)"/>
        <path d="M215.893 50.408C216.997 50.216 217.885 50 218.557 49.76C219.229 49.52 219.925 49.112 220.645 48.536V28.016C220.645 26.24 220.261 25.04 219.493 24.416C218.773 23.744 217.477 23.36 215.605 23.264L215.821 21.176C217.309 20.888 219.445 20.312 222.229 19.448L224.605 18.728L225.901 19.376L226.621 24.416C227.725 22.736 229.021 21.368 230.509 20.312C231.997 19.256 233.581 18.728 235.261 18.728C236.989 18.728 238.477 19.232 239.725 20.24C241.021 21.248 241.669 22.688 241.669 24.56C241.669 25.76 241.309 26.816 240.589 27.728C239.917 28.64 239.005 29.096 237.853 29.096C237.037 29.096 236.269 28.904 235.549 28.52C234.829 28.088 234.373 27.536 234.181 26.864C234.373 26.672 234.541 26.384 234.685 26C234.829 25.568 234.901 25.184 234.901 24.848C234.901 23.408 234.229 22.688 232.885 22.688C232.021 22.688 231.109 23.144 230.149 24.056C229.189 24.968 228.373 26.144 227.701 27.584C227.077 28.976 226.765 30.392 226.765 31.832V48.536C228.061 49.4 229.957 50.072 232.453 50.552L232.165 53H215.605L215.893 50.408Z" stroke="#044C03" stroke-width="8" mask="url(#path-1-outside-1)"/>
        </svg>
        
        

    <div class="bg-green-400 absolute top-36 flex justify-center flex-co w-1/3 rounded-2xl px-10">
        <form class="flex flex-col p-10 w-full" 
            autocomplete="off" action="{{ route('phonebook.register') }}" method="POST">
            @csrf
            <label class="block text-black text-xl font-medium ml-1" for="name">
                Name
            </label>
            <input class="w-full h-11 text-xl border-green-600 rounded-lg shadow-sm ml-1 mb-5" 
                type="text" 
                name="name" 
            required>
            <label class="block text-black text-xl font-medium ml-1" 
                for="email">
                Email
            </label>
            <input class="w-full h-11 text-xl border-green-600 rounded-lg shadow-sm ml-1 mb-5" 
                type="email" 
                name="email" 
            required>
            <label class="block text-black text-xl font-medium ml-1" for="password">
                Password
            </label>
            <input class="w-full h-11 text-xl border-green-600 rounded-lg shadow-sm ml-1 mb-5" 
                type="password" 
                name="password" 
            required>
            <label class="block text-black text-xl font-medium ml-1" 
                for="password_confirmation">
                Confirm password
            </label>
            <input class="w-full h-11 text-xl border-green-600 rounded-lg shadow-sm ml-1 mb-5" 
                type="password" 
                name="password_confirmation" 
            required>
            @error('Error')
            <span class="ml-1 text-lg text-red-900">
                {{ $message }}
            </span>
            @enderror
            <button class="
                ml-1 mt-3 h-9 text-xl border-2 rounded-full text-center border-black 
                bg-green-600 hover:bg-green-800 cursor-pointer" 
                type="submit">
                Register
            </button>
            <a class="
                ml-1 mt-3 h-9 text-xl border-2 rounded-full text-center border-black 
                bg-green-600 hover:bg-green-800 cursor-pointer" 
                href="{{ route('phonebook.login') }}">
                Back
            </a>
        </form>
    </div>
    
</body>
</html>