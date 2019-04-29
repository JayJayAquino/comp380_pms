export default {
    test: state => state.test,
    getRows: state=>{
        return state.rowCounter++;
    }
}
