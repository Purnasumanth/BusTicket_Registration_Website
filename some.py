l1=['"Amaravathi"','"Bangulore"','"Chennai"','"Delhi"','"Haryana"','"Hyderabad"','"Kerala"','"Mumbai"','"Warangal"','"Vijayawada"']
l2=['"Amaravathi"','"Bangulore"','"Chennai"','"Delhi"','"Haryana"','"Hyderabad"','"Kerala"','"Mumbai"','"Warangal"','"Vijayawada"']
# l2=["Amaravathi","Bangulore","Chennai","Delhi","Haryana","Hyderabad","Kerala","Mumbai","Warangal","Vijayawada"]
a=1181
b=1
for i in range(len(l1)):
    for j in range(len(l2)):
        if l1[i]==l2[j]:
            b+=1
        else:
            print("INSERT INTO `bus_slots`(`bus id`, `bus name`, `source`, `destination`) VALUES (",a,",",l1[i][0:5],"-",l2[j][1:5],'"',",",l1[i],",",l2[j],");")
            # INSERT INTO `bus_slots`(`bus id`, `bus name`, `source`, `destination`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
            a+=1
    print()