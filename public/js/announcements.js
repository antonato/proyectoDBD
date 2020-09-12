let $selectFilter, $selectCategory;

$(function () {
    $selectFilter = $('sort');
    $selectCategory = $('group-category');

    $('.switch').on('click', onClickSwitchSort);

    $selectFilter.change(onChangeFilter);
    $selectCategory.change(onChangeFilter);
});

function onClickSwitchSort() {
    const id = $(this).data('id');
    const value = $(this).data('to');
    location.href = '/announcement/all/$'
}