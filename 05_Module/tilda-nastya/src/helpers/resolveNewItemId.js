export default function resolveNewItemId(array) {
    let sortedIds = array.map(p => p.id).sort((a, b) => a - b);

    if (sortedIds.length === 0) {
        return 1;
    }

    if (sortedIds[0] !== 1) {
        return 1;
    }

    for (let index = 0; index < sortedIds.length - 1; index++) {
        let current = sortedIds[index];
        let next = sortedIds[index + 1];
        if (next - current > 1) {
            return current + 1;
        }
    }
    return array.length + 1;
}