from collections import Counter

shoes = int(input()) # 10
sizes = Counter(map(int, input().split())) # 2 3 4 5 6 8 7 6 5 18
custo = int(input()) # 6
income = [] 
for _ in range(custo):
    size, price = map(int , input().split())
    if sizes[size]:
        income.append(price)
        sizes[size] -= 1
        
print(sum(income))
