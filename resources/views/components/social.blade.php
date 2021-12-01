@props(['icon' => 'twitter', 'instagram', 'facebook', 'google'])

@if($icon === 'twitter' ?? false)

    <svg width="36" height="28" viewBox="0 0 36 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M35.0051 3.28428C33.7178 3.83928 32.3349 4.21428 30.8811 4.38378C32.3812 3.51047 33.5034 2.13598 34.0385 0.516778C32.6291 1.33126 31.0867 1.90457 29.4782 2.21178C28.3965 1.08808 26.9638 0.343267 25.4025 0.0929886C23.8412 -0.15729 22.2387 0.100965 20.8437 0.827657C19.4487 1.55435 18.3393 2.70882 17.6878 4.11183C17.0362 5.51485 16.879 7.0879 17.2405 8.58678C14.3848 8.44727 11.5912 7.7251 9.04099 6.46713C6.49076 5.20917 4.24088 3.44352 2.43737 1.28478C1.82071 2.31978 1.46613 3.51978 1.46613 4.79778C1.46544 5.94827 1.75663 7.08114 2.31385 8.09588C2.87108 9.11061 3.67712 9.97583 4.66046 10.6148C3.52005 10.5795 2.4048 10.2797 1.40754 9.74028V9.83028C1.40743 11.4439 1.98109 13.0078 3.0312 14.2568C4.08131 15.5057 5.54317 16.3627 7.16875 16.6823C6.11083 16.9609 5.00169 17.0019 3.92508 16.8023C4.38372 18.1907 5.27712 19.4048 6.48019 20.2747C7.68326 21.1445 9.13579 21.6265 10.6344 21.6533C8.09041 23.5964 4.94858 24.6504 1.71433 24.6458C1.14142 24.6459 0.568993 24.6134 0 24.5483C3.28294 26.602 7.10452 27.692 11.0075 27.6878C24.2196 27.6878 31.4423 17.0408 31.4423 7.80678C31.4423 7.50678 31.4346 7.20378 31.4207 6.90378C32.8256 5.91524 34.0383 4.69112 35.002 3.28878L35.0051 3.28428Z"
            fill="white"/>
    </svg>

@elseif($icon === 'instagram' ?? false)

    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M14.996 9.66461C12.2417 9.66461 9.99393 11.8375 9.99393 14.5C9.99393 17.1625 12.2417 19.3354 14.996 19.3354C17.7503 19.3354 19.998 17.1625 19.998 14.5C19.998 11.8375 17.7503 9.66461 14.996 9.66461ZM29.9983 14.5C29.9983 12.4976 30.0171 10.5134 29.9008 8.51471C29.7844 6.19314 29.2366 4.13275 27.4804 2.4351C25.7205 0.733824 23.5929 0.207844 21.1913 0.0953926C19.1199 -0.0170583 17.0673 0.00107896 14.9997 0.00107896C12.9284 0.00107896 10.8758 -0.0170583 8.80815 0.0953926C6.40657 0.207844 4.27517 0.737451 2.51902 2.4351C0.759114 4.13637 0.215007 6.19314 0.0986802 8.51471C-0.0176462 10.5171 0.00111615 12.5013 0.00111615 14.5C0.00111615 16.4987 -0.0176462 18.4866 0.0986802 20.4853C0.215007 22.8069 0.762867 24.8673 2.51902 26.5649C4.27893 28.2662 6.40657 28.7922 8.80815 28.9046C10.8795 29.0171 12.9321 28.9989 14.9997 28.9989C17.0711 28.9989 19.1237 29.0171 21.1913 28.9046C23.5929 28.7922 25.7243 28.2625 27.4804 26.5649C29.2403 24.8636 29.7844 22.8069 29.9008 20.4853C30.0208 18.4866 29.9983 16.5024 29.9983 14.5ZM14.996 21.9399C10.7369 21.9399 7.29966 18.6172 7.29966 14.5C7.29966 10.3828 10.7369 7.0601 14.996 7.0601C19.255 7.0601 22.6923 10.3828 22.6923 14.5C22.6923 18.6172 19.255 21.9399 14.996 21.9399ZM23.0075 8.49294C22.0131 8.49294 21.2101 7.71667 21.2101 6.75539C21.2101 5.79412 22.0131 5.01784 23.0075 5.01784C24.0019 5.01784 24.8049 5.79412 24.8049 6.75539C24.8052 6.98365 24.7589 7.20972 24.6687 7.42066C24.5785 7.6316 24.4461 7.82326 24.2791 7.98466C24.1122 8.14607 23.9139 8.27404 23.6957 8.36126C23.4775 8.44848 23.2436 8.49323 23.0075 8.49294Z"
            fill="white"/>
    </svg>
@elseif($icon === 'facebook' ?? false)
    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M5.47782 0C2.44335 0 0 2.3619 0 5.29523V23.7048C0 26.6381 2.44335 29 5.47782 29H15.7997V17.6628H12.6985V13.5811H15.7997V10.0938C15.7997 7.35405 17.6321 4.83848 21.8531 4.83848C23.5622 4.83848 24.826 4.99708 24.826 4.99708L24.7266 8.80878C24.7266 8.80878 23.4377 8.79701 22.0312 8.79701C20.5091 8.79701 20.265 9.47497 20.265 10.6005V13.5811H24.8475L24.6478 17.6629H20.265V29.0001H24.5222C27.5567 29.0001 30 26.6382 30 23.7048V5.29526C30 2.36193 27.5567 2.9e-05 24.5222 2.9e-05H5.47779L5.47782 0Z"
            fill="white"/>
    </svg>
@elseif($icon === 'google' ?? false)
    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M29.6768 13.4519H28.6012V13.3963H16.5835V18.7495H24.1299C23.029 21.8657 20.0706 24.1027 16.5835 24.1027C12.159 24.1027 8.57167 20.5074 8.57167 16.0729C8.57167 11.6385 12.159 8.04313 16.5835 8.04313C18.6258 8.04313 20.4839 8.81533 21.8986 10.0767L25.6755 6.2913C23.2907 4.0637 20.1007 2.68994 16.5835 2.68994C9.20928 2.68994 3.23047 8.68217 3.23047 16.0729C3.23047 23.4637 9.20928 29.4559 16.5835 29.4559C23.9577 29.4559 29.9365 23.4637 29.9365 16.0729C29.9365 15.1756 29.8443 14.2997 29.6768 13.4519Z" fill="#FFC107"/>
        <path d="M4.77051 9.84381L9.15764 13.0684C10.3447 10.1228 13.2196 8.04313 16.5839 8.04313C18.6263 8.04313 20.4843 8.81533 21.8991 10.0767L25.676 6.2913C23.2911 4.0637 20.1011 2.68994 16.5839 2.68994C11.455 2.68994 7.00714 5.59204 4.77051 9.84381Z" fill="#FF3D00"/>
        <path d="M16.5838 29.4559C20.0329 29.4559 23.1668 28.133 25.5363 25.9817L21.4036 22.4767C20.0179 23.5328 18.3247 24.1041 16.5838 24.1027C13.1107 24.1027 10.1617 21.8831 9.0507 18.7856L4.69629 22.1481C6.90621 26.4822 11.3942 29.4559 16.5838 29.4559Z" fill="#4CAF50"/>
        <path d="M29.6768 13.452H28.6012V13.3965H16.5835V18.7497H24.13C23.6033 20.2328 22.6547 21.5288 21.4013 22.4775L21.4033 22.4762L25.536 25.9812C25.2436 26.2475 29.9365 22.7646 29.9365 16.0731C29.9365 15.1758 29.8444 14.2998 29.6768 13.452Z" fill="#1976D2"/>
    </svg>
@endif
