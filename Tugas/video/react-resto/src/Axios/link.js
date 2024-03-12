import axios from 'axios'

const url = "http://127.0.0.1:8000/api/"
const token = "xLDoOuqngVo5PvThHnHOLHNvek9iyqk6o9Oy0C7U"

export const link = axios.create({
    baseURL: url,
    headers: {
        'api_token' : token,
    }
})