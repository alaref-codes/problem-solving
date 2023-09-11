func containsDuplicate(nums []int) bool {
    result := false

    for i := 0; i < len(nums); i++ {
        for j := i + 1; j < len(nums); j++ {
            if nums[i] == nums[j] {
                result = true
                break
            }
            if result == true {
                break
            }
        }
    }

    return result
}
