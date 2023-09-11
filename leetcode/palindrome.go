func isPalindrome(x int) bool {
	if x < 0 {
	return false
}
cop := x
var array []int
for cop > 0 {
	digit := cop % 10
	array = append(array, digit)
	cop /= 10
}
for i, j := 0, len(array)-1; i < len(array); i, j = i+1, j-1 {
	if array[i] != array[j] {
		return false
	}
}
return true
}