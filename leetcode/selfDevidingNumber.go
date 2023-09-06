func selfDividingNumbers(left int, right int) []int {
    var results []int
    for i := left; i <= right; i++ {
        stri := strconv.Itoa(i)
        digit_array := make([]int, len(stri))
        for j, ch := range stri {
            digit_array[j], _ = strconv.Atoi(string(ch))
        }
        accepted := true
        for _, value := range digit_array {
            if value == 0 {
                accepted = false
                break
            }
            if i % value != 0 {
                accepted = false
                break
            }
        }
        if accepted {
            results = append(results, i)
        }
    }
    return results
}