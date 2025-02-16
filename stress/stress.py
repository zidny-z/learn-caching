from locust import HttpUser, task, between

class EmployeeLoadTest(HttpUser):
    wait_time = between(1, 3)  # Simulasi delay request

    @task
    def get_employees(self):
        self.client.get("/employees")