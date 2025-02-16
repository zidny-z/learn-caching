## Info
PHP is slow, right? so i learn how to implement caching with redis in laravel.
With test case in stress folder i get number that there is 100% improvement of load test.
I got 2000 ms without redis implementation
and I got 1000 ms with redis implementation <see the pdf in stress folder>
Also i got 3000 ms without redis
and i got 2000 ms with redis

## Install and run test
- install python
- then pip install uv
- cd stress
- uv sync
- uv run locust -f stress.py --host=http://127.0.0.1:8000
