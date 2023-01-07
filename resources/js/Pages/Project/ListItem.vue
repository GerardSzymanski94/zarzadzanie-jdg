<template>
    <tr>
        <th scope="row">
            {{ id }}
        </th>
        <td>
            {{ name }}
        </td>
        <td>
            {{ description }}
        </td>
        <td>
            <div class="row">
                <div class="col-6"><a href="#" class="btn-sm btn-primary">Edytuj</a></div>
                <div class="col-6"><a href="#" class="btn-sm btn-danger">Usuń</a></div>
            </div>
        </td>

    </tr>
</template>
<script>

export default {
    props: {
        name: String,
        description: String,
        status: Number,
        id: Number,
    },
    data() {
        return {
            url: [],
            content: [],
        }

    },
    created() {

    },

}
</script>
