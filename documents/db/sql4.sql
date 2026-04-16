/* 1. Название рецепта, название его типа (псевдоним type_name)
      и имя его автора (псевдоним author_name) для 10 последних рецептов 2024 года,
      отсортированных по дате создания в порядке убывания. */

-- SELECT
-- 	r.name AS recipe_name,
--     t.name AS type_name,
--     u.name AS author_name
-- FROM recipes r
-- JOIN types_of_recipes t ON r.type_id = t.id
-- JOIN users u ON r.user_id = u.id
-- WHERE YEAR(r.created_at) = 2024
-- ORDER BY r.created_at DESC
-- LIMIT 10;

/* 2. Удалите из таблицы recipes рецепт, у которого id = 12. */

-- DELETE FROM comments WHERE recipe_id = 12;
-- DELETE FROM ratings WHERE recipe_id = 12;
-- DELETE FROM recipes_has_ingredients WHERE recipe_id = 12;
-- DELETE FROM recipes WHERE id = 12;

/* 3. Обновите поле description рецепта с id = 8,
      заменив его на: "Description mise à jour". */
      
-- UPDATE recipes
-- SET description = 'Description mise a jour'
-- WHERE id = 8;


/* 4. Добавьте новый рецепт со следующими значениями,
      используя синтаксис INSERT … VALUES:
        - name = 'Recette Test A'
        - prep_time = '30 min'
        - portions = 4
        - user_id = 2
        - type_id = 3 */
  
-- INSERT INTO recipes (name, description, prep_time, portions, user_id, type_id, created_at)
-- VALUES ('Recette Test A', 'Test description', '30 min', 4, 2, 3, NOW());    

-- SELECT * FROM recipes r WHERE r.name = 'Recette Test A'

/* 5. Названия ингредиентов, которые не используются ни в одном рецепте,
      отсортированные в алфавитном порядке */
      
-- SELECT DISTINCT i.name
-- FROM ingredients i
-- LEFT JOIN recipes_has_ingredients rhi 
--     ON i.id = rhi.ingredient_id
-- WHERE rhi.ingredient_id IS NULL
-- ORDER BY i.name ASC;,

/* 6. Выберите название каждого рецепта и количество комментариев,
      отсортированные по убыванию количества комментариев.
      Включите рецепты без комментариев. */
      

-- SELECT
--     r.name,
--     COUNT(c.id) AS comments_count
-- FROM recipes r
-- LEFT JOIN comments c
--     ON r.id = c.recipe_id
-- GROUP BY r.id, r.name
-- ORDER BY comments_count DESC;

/* 7. Выберите название каждого рецепта и его среднюю оценку,
      отсортированные по возрастанию средней оценки,
      у которых средняя оценка больше 3. */
      
SELECT
    r.name AS recipe_name,
    AVG(rt.value) AS avg_rating
FROM recipes r
JOIN ratings rt
    ON r.id = rt.recipe_id
GROUP BY r.id, r.name
HAVING AVG(rt.value) > 3
ORDER BY avg_rating ASC;
