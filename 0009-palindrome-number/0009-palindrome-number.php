class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $xrev = strrev((string)$x);
        if((string)$x==$xrev){
            return true;
        }else{
            return false;
        }
    }
}