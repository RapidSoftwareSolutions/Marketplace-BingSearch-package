# BingSearch Package
Embed Bing search results into your app.
* Domain: microsoft.com
* Credentials: subscriptionKey

## How to get credentials: 
 1. Create [Microsoft account](https://www.microsoft.com/cognitive-services/en-US/subscriptions) or log in. 
 2. Choose "Bing Search - Preview" to create new subscription
 3. In **Key** section choose Key1 or Key2 and press <kbd>Show</kbd> or  <kbd>Copy</kbd>
 
## BingSearch.advacedSearch
This endpoint allows to get back a list of relevant data.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| The api key obtained from Microsoft Cognitive Servisces.
| query          | String     | The user's search query string.
| market         | String     | The market where the results come from. Typically, this is the country where the user is making the request from; however, it could be a different country if the user is not located in a country where Bing delivers results. The market must be in the form -. For example, en-US.
| safeSearch     | String     | A filter used to filter results for adult content. Possible values: Off — Return webpages with adult text, images, or videos. Moderate — Return webpages with adult text; however, the articles will not include adult images or videos. Strict — Do not return webpages with adult text, images, or videos. Default is Moderate
| textDecorations| String     | A Boolean value that determines whether query terms in the response strings will include hit highlighting characters. If true, the strings will include highlighting characters; otherwise, false. The default is false.
| textFormat     | String     | The type of formatting to apply to displayable strings. The following are the possible values: Raw—Use special Unicode characters, E000 and E001, to highlight the query terms; HTML—Use HTML `<b>` tags to highlight the query terms. The default is Raw. To enable or disable hit highlighting, set the textDecorations query parameter.
| responseFilter | String     | A comma-delimited list of answers to include in the response. If you do not specify this parameter, the response will include all search answers for which there's data. Possible values: Computation, Images, News, RelatedSearches, SpellSuggestions, TimeZone, Videos, Webpages
| count          | String     | The number of news results to return in the response. The actual number delivered may be less than requested.
| offset         | String     | The zero-based offset that indicates the number of news results to skip before returning results.

## BingSearch.searchWeb
This endpoint allows to get back a list of relevant webpages.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| The api key obtained from Microsoft Cognitive Servisces.
| query          | String     | The user's search query string.
| market         | String     | The market where the results come from. Typically, this is the country where the user is making the request from; however, it could be a different country if the user is not located in a country where Bing delivers results. The market must be in the form -. For example, en-US.
| safeSearch     | String     | A filter used to filter results for adult content. Possible values: Off — Return webpages with adult text, images, or videos. Moderate — Return webpages with adult text; however, the articles will not include adult images or videos. Strict — Do not return webpages with adult text, images, or videos. Default is Moderate
| textDecorations| String     | A Boolean value that determines whether query terms in the response strings will include hit highlighting characters. If true, the strings will include highlighting characters; otherwise, false. The default is false.
| textFormat     | String     | The type of formatting to apply to displayable strings. The following are the possible values: Raw—Use special Unicode characters, E000 and E001, to highlight the query terms; HTML—Use HTML `<b>` tags to highlight the query terms. The default is Raw. To enable or disable hit highlighting, set the textDecorations query parameter.
| count          | String     | The number of news results to return in the response. The actual number delivered may be less than requested.
| offset         | String     | The zero-based offset that indicates the number of news results to skip before returning results.

## BingSearch.searchImage
This endpoint allows to get back a list of relevant images.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| The api key obtained from Microsoft Cognitive Servisces.
| query          | String     | The user's search query string.
| market         | String     | The market where the results come from. Typically, this is the country where the user is making the request from; however, it could be a different country if the user is not located in a country where Bing delivers results. The market must be in the form -. For example, en-US.
| safeSearch     | String     | A filter used to filter results for adult content. Possible values: Off — Return webpages with adult text, images, or videos. Moderate — Return webpages with adult text; however, the articles will not include adult images or videos. Strict — Do not return webpages with adult text, images, or videos. Default is Moderate
| textDecorations| String     | A Boolean value that determines whether query terms in the response strings will include hit highlighting characters. If true, the strings will include highlighting characters; otherwise, false. The default is false.
| textFormat     | String     | The type of formatting to apply to displayable strings. The following are the possible values: Raw—Use special Unicode characters, E000 and E001, to highlight the query terms; HTML—Use HTML `<b>` tags to highlight the query terms. The default is Raw. To enable or disable hit highlighting, set the textDecorations query parameter.
| aspect         | String     | Filter images by aspect ratio. The following are the possible filter values: Square — Return images with standard aspect ratio; Wide — Return images with wide screen aspect ratio; Tall — Return images with tall aspect ratio; All — Do not filter by aspect. Specifying this value is the same as not specifying the aspect parameter.
| color          | String     | Filter images by color. The following are the possible filter values: ColorOnly — Return color images, Monochrome — Return black and white images, Black, Blue, Brown, Gray, Green, Orange, Pink, Purple, Red, Teal, White, Yellow
| imageContent   | String     | Filter images by content. The following are the possible filter values: Face — Return images that show only a person's face; Portrait — Return images that show only a person's head and shoulders
| size           | String     | Filter images by size. The following are the possible filter values: Small — Return images that are less than 200x200 pixels; Medium — Return images that are greater than or equal to 200x200 pixels but less than 500x500 pixels; Large — Return images that are 500x500 pixels or larger; Wallpaper — Return wallpaper images; All — Do not filter by size. Specifying this value is the same as not specifying the size parameter.
| height         | String     | Filter images that have the specified height, in pixels.
| width          | String     | Filter images that have the specified width, in pixels.
| imageType      | String     | Filter images by image type. The following are the possible filter values: AnimatedGif — Return only animated GIFs; Clipart — Return only clip art images; Line — Return only line drawings; Photo — Return only photographs (excluding line drawings, animated Gifs, and clip art); Shopping — Return only images that contain items where Bing knows of a merchant that is selling the items.
| count          | String     | The number of news results to return in the response. The actual number delivered may be less than requested.
| offset         | String     | The zero-based offset that indicates the number of news results to skip before returning results.

## BingSearch.searchVideo
This endpoint allows to get back a list of relevant videos.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| The api key obtained from Microsoft Cognitive Servisces.
| query          | String     | The user's search query string.
| market         | String     | The market where the results come from. Typically, this is the country where the user is making the request from; however, it could be a different country if the user is not located in a country where Bing delivers results. The market must be in the form -. For example, en-US.
| safeSearch     | String     | A filter used to filter results for adult content. Possible values: Off — Return webpages with adult text, images, or videos. Moderate — Return webpages with adult text; however, the articles will not include adult images or videos. Strict — Do not return webpages with adult text, images, or videos. Default is Moderate
| textDecorations| String     | A Boolean value that determines whether query terms in the response strings will include hit highlighting characters. If true, the strings will include highlighting characters; otherwise, false. The default is false.
| textFormat     | String     | The type of formatting to apply to displayable strings. The following are the possible values: Raw—Use special Unicode characters, E000 and E001, to highlight the query terms; HTML—Use HTML `<b>` tags to highlight the query terms. The default is Raw. To enable or disable hit highlighting, set the textDecorations query parameter.
| videoLength    | String     | Filter videos by length. The following are the possible filter values: Short — Return videos that are less than 5 minutes; Medium — Return videos that are between 5 and 20 minutes, inclusive; Long — Return videos that are longer than 20 minutes; All — Do not filter by length. Specifying this value is the same as not specifying the videoLength parameter.
| resolution     | String     | Filter videos by resolution. The following are the possible filter values: 480p — Return videos with a 480p or higher resolution; 720p — Return videos with a 720p or higher resolution; 1080p — Return videos with a 1080p or higher resolution; All — Do not filter by resolution. Specifying this value is the same as not specifying the resolution parameter.
| count          | String     | The number of news results to return in the response. The actual number delivered may be less than requested.
| offset         | String     | The zero-based offset that indicates the number of news results to skip before returning results.

## BingSearch.searchNews
This endpoint allows to get back a list of relevant news.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| The api key obtained from Microsoft Cognitive Servisces.
| query          | String     | The user's search query string.
| market         | String     | The market where the results come from. Typically, this is the country where the user is making the request from; however, it could be a different country if the user is not located in a country where Bing delivers results. The market must be in the form -. For example, en-US.
| safeSearch     | String     | A filter used to filter results for adult content. Possible values: Off — Return webpages with adult text, images, or videos. Moderate — Return webpages with adult text; however, the articles will not include adult images or videos. Strict — Do not return webpages with adult text, images, or videos. Default is Moderate
| textDecorations| String     | A Boolean value that determines whether query terms in the response strings will include hit highlighting characters. If true, the strings will include highlighting characters; otherwise, false. The default is false.
| textFormat     | String     | The type of formatting to apply to displayable strings. The following are the possible values: Raw—Use special Unicode characters, E000 and E001, to highlight the query terms; HTML—Use HTML `<b>` tags to highlight the query terms. The default is Raw. To enable or disable hit highlighting, set the textDecorations query parameter.
| category       | String     | The category of articles to return. For example, Sports articles or Entertainment articles. For a list of possible categories, see News Categories by Market (https://msdn.microsoft.com/en-us/library/dn760793.aspx#categoriesbymarket).
| count          | String     | The number of news results to return in the response. The actual number delivered may be less than requested.
| offset         | String     | The zero-based offset that indicates the number of news results to skip before returning results.

## BingSearch.getRelatedSearch
This endpoint allows to get back a list of related data.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| The api key obtained from Microsoft Cognitive Servisces.
| query          | String     | The user's search query string.
| market         | String     | The market where the results come from. Typically, this is the country where the user is making the request from; however, it could be a different country if the user is not located in a country where Bing delivers results. The market must be in the form -. For example, en-US.
| safeSearch     | String     | A filter used to filter results for adult content. Possible values: Off — Return webpages with adult text, images, or videos. Moderate — Return webpages with adult text; however, the articles will not include adult images or videos. Strict — Do not return webpages with adult text, images, or videos. Default is Moderate
| textDecorations| String     | A Boolean value that determines whether query terms in the response strings will include hit highlighting characters. If true, the strings will include highlighting characters; otherwise, false. The default is false.
| textFormat     | String     | The type of formatting to apply to displayable strings. The following are the possible values: Raw—Use special Unicode characters, E000 and E001, to highlight the query terms; HTML—Use HTML `<b>` tags to highlight the query terms. The default is Raw. To enable or disable hit highlighting, set the textDecorations query parameter.
| count          | String     | The number of news results to return in the response. The actual number delivered may be less than requested.
| offset         | String     | The zero-based offset that indicates the number of news results to skip before returning results.

## BingSearch.getSpellingSuggestions
This endpoint allows to get back a list data with spelling suggestions.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| The api key obtained from Microsoft Cognitive Servisces.
| query          | String     | The user's search query string.
| market         | String     | The market where the results come from. Typically, this is the country where the user is making the request from; however, it could be a different country if the user is not located in a country where Bing delivers results. The market must be in the form -. For example, en-US.
| safeSearch     | String     | A filter used to filter results for adult content. Possible values: Off — Return webpages with adult text, images, or videos. Moderate — Return webpages with adult text; however, the articles will not include adult images or videos. Strict — Do not return webpages with adult text, images, or videos. Default is Moderate
| textDecorations| String     | A Boolean value that determines whether query terms in the response strings will include hit highlighting characters. If true, the strings will include highlighting characters; otherwise, false. The default is false.
| textFormat     | String     | The type of formatting to apply to displayable strings. The following are the possible values: Raw—Use special Unicode characters, E000 and E001, to highlight the query terms; HTML—Use HTML `<b>` tags to highlight the query terms. The default is Raw. To enable or disable hit highlighting, set the textDecorations query parameter.
| count          | String     | The number of news results to return in the response. The actual number delivered may be less than requested.
| offset         | String     | The zero-based offset that indicates the number of news results to skip before returning results.

