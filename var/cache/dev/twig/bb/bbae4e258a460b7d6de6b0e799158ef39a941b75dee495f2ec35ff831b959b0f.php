<?php

/* @Admin/CtTypeAnomalie/index.html.twig */
class __TwigTemplate_3f760eb65500c86123b51dfae8db1cfb153c12adb5bdb1239688767badcb383c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeAnomalie/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d03012109a9aaa0e2dfe4c30d6a7f460347b09450442dfa67c45fffa66ca2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d03012109a9aaa0e2dfe4c30d6a7f460347b09450442dfa67c45fffa66ca2aa->enter($__internal_2d03012109a9aaa0e2dfe4c30d6a7f460347b09450442dfa67c45fffa66ca2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/index.html.twig"));

        $__internal_f95b0107331492e4124780dc28f7d05ca8205a41104f5a07e87d3f379f732659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95b0107331492e4124780dc28f7d05ca8205a41104f5a07e87d3f379f732659->enter($__internal_f95b0107331492e4124780dc28f7d05ca8205a41104f5a07e87d3f379f732659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/index.html.twig"));

        // line 5
        $context["menu_anomalie"] = true;
        // line 6
        $context["menu_type_anomalie"] = true;
        // line 7
        $context["menu_type_anomalie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d03012109a9aaa0e2dfe4c30d6a7f460347b09450442dfa67c45fffa66ca2aa->leave($__internal_2d03012109a9aaa0e2dfe4c30d6a7f460347b09450442dfa67c45fffa66ca2aa_prof);

        
        $__internal_f95b0107331492e4124780dc28f7d05ca8205a41104f5a07e87d3f379f732659->leave($__internal_f95b0107331492e4124780dc28f7d05ca8205a41104f5a07e87d3f379f732659_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4d05577f7b2e9dd1f40bf90ef7552df94ae44157caaa538602c2dd611755340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d05577f7b2e9dd1f40bf90ef7552df94ae44157caaa538602c2dd611755340->enter($__internal_d4d05577f7b2e9dd1f40bf90ef7552df94ae44157caaa538602c2dd611755340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10ecc1e437419a39450cb662365498898e83972382c99217657b26573ae4a277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ecc1e437419a39450cb662365498898e83972382c99217657b26573ae4a277->enter($__internal_10ecc1e437419a39450cb662365498898e83972382c99217657b26573ae4a277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types d' anomalies ";
        
        $__internal_10ecc1e437419a39450cb662365498898e83972382c99217657b26573ae4a277->leave($__internal_10ecc1e437419a39450cb662365498898e83972382c99217657b26573ae4a277_prof);

        
        $__internal_d4d05577f7b2e9dd1f40bf90ef7552df94ae44157caaa538602c2dd611755340->leave($__internal_d4d05577f7b2e9dd1f40bf90ef7552df94ae44157caaa538602c2dd611755340_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_09d12936fd90371451b654519c5737f1baa02db69ab9bad13ef96c53609de227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d12936fd90371451b654519c5737f1baa02db69ab9bad13ef96c53609de227->enter($__internal_09d12936fd90371451b654519c5737f1baa02db69ab9bad13ef96c53609de227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_534a0bb6aa8d52911c2077986f8862e9b773b1df04bd2e6c7d807d5c32a7077c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534a0bb6aa8d52911c2077986f8862e9b773b1df04bd2e6c7d807d5c32a7077c->enter($__internal_534a0bb6aa8d52911c2077986f8862e9b773b1df04bd2e6c7d807d5c32a7077c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type d'anomalie
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-anomalie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_anomalies"] ?? $this->getContext($context, "type_anomalies")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_anomalie"]) {
            // line 58
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_anomalie"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_anomalie"], "atpLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_edit", array("id" => $this->getAttribute($context["type_anomalie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_delete", array("id" => $this->getAttribute($context["type_anomalie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_anomalie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>

                        ";
        // line 79
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_534a0bb6aa8d52911c2077986f8862e9b773b1df04bd2e6c7d807d5c32a7077c->leave($__internal_534a0bb6aa8d52911c2077986f8862e9b773b1df04bd2e6c7d807d5c32a7077c_prof);

        
        $__internal_09d12936fd90371451b654519c5737f1baa02db69ab9bad13ef96c53609de227->leave($__internal_09d12936fd90371451b654519c5737f1baa02db69ab9bad13ef96c53609de227_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a701c41d076578694361ac6492c0757c9b4da8ffe18e1ad7423d519a7e1f073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a701c41d076578694361ac6492c0757c9b4da8ffe18e1ad7423d519a7e1f073->enter($__internal_3a701c41d076578694361ac6492c0757c9b4da8ffe18e1ad7423d519a7e1f073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_459a83856911ffee5f1441629e9f1a631ac47dd851f648a0750c427a30d8cf0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459a83856911ffee5f1441629e9f1a631ac47dd851f648a0750c427a30d8cf0d->enter($__internal_459a83856911ffee5f1441629e9f1a631ac47dd851f648a0750c427a30d8cf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type-anomalie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucun type anomalie trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_459a83856911ffee5f1441629e9f1a631ac47dd851f648a0750c427a30d8cf0d->leave($__internal_459a83856911ffee5f1441629e9f1a631ac47dd851f648a0750c427a30d8cf0d_prof);

        
        $__internal_3a701c41d076578694361ac6492c0757c9b4da8ffe18e1ad7423d519a7e1f073->leave($__internal_3a701c41d076578694361ac6492c0757c9b4da8ffe18e1ad7423d519a7e1f073_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeAnomalie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 93,  236 => 92,  215 => 79,  210 => 75,  198 => 69,  191 => 65,  185 => 62,  180 => 60,  176 => 58,  172 => 57,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des types d' anomalies {% endblock %}

{% set menu_anomalie           = true %}
{% set menu_type_anomalie      = true %}
{% set menu_type_anomalie_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('type_anomalie_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type d'anomalie
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_anomalie_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-anomalie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            {% for type_anomalie in type_anomalies %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ type_anomalie.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ type_anomalie.atpLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('type_anomalie_edit', { 'id': type_anomalie.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('type_anomalie_delete', { 'id': type_anomalie.id }) }}\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type-anomalie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucun type anomalie trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtTypeAnomalie/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeAnomalie\\index.html.twig");
    }
}
