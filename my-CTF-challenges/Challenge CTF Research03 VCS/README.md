# Type
`challenge CTF training: Easy Login`
# Author
`hoaln`
# Deploy
- `docker-compose up -d --build`
# Description
Prototype pollution vulnerability.
## Chức năng
- Đăng nhập
## Solution
- POST data trong chức năng đăng nhập: {"__proto__":{"role":1}} (lưu ý header cần sửa thành Content-Type: application/json)
## Error: Cannot find module 'ejs' --> fix:
- `cd ./web`
- `npm install ejs`