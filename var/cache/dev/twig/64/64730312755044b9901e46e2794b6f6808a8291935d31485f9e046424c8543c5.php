<?php

/* AdminBundle:CtTypeAnomalie:index.html.twig */
class __TwigTemplate_1ae25ff5f1105b380ac4f9fe49dba859682ad2ad0c9c881d41534a1d01818f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeAnomalie:index.html.twig", 1);
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
        $__internal_8476c5965ce90c109abe646563962a0dae2eac84c1fb760191bdba800ba78eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8476c5965ce90c109abe646563962a0dae2eac84c1fb760191bdba800ba78eb8->enter($__internal_8476c5965ce90c109abe646563962a0dae2eac84c1fb760191bdba800ba78eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:index.html.twig"));

        $__internal_66c76aaf95a82b3bf879cd735368a13157fd91e01b48c2399d609d3af298a0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c76aaf95a82b3bf879cd735368a13157fd91e01b48c2399d609d3af298a0ae->enter($__internal_66c76aaf95a82b3bf879cd735368a13157fd91e01b48c2399d609d3af298a0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:index.html.twig"));

        // line 5
        $context["menu_anomalie"] = true;
        // line 6
        $context["menu_type_anomalie"] = true;
        // line 7
        $context["menu_type_anomalie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8476c5965ce90c109abe646563962a0dae2eac84c1fb760191bdba800ba78eb8->leave($__internal_8476c5965ce90c109abe646563962a0dae2eac84c1fb760191bdba800ba78eb8_prof);

        
        $__internal_66c76aaf95a82b3bf879cd735368a13157fd91e01b48c2399d609d3af298a0ae->leave($__internal_66c76aaf95a82b3bf879cd735368a13157fd91e01b48c2399d609d3af298a0ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37a3737368889b10d0c0dc7a445edfd1a8d0e04acddf9754f9bb1e6713bd8efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a3737368889b10d0c0dc7a445edfd1a8d0e04acddf9754f9bb1e6713bd8efb->enter($__internal_37a3737368889b10d0c0dc7a445edfd1a8d0e04acddf9754f9bb1e6713bd8efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b58d66b6a3c38d5796d01f9099b54b8074713228f9e19dd76145b9e785c9ccdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58d66b6a3c38d5796d01f9099b54b8074713228f9e19dd76145b9e785c9ccdd->enter($__internal_b58d66b6a3c38d5796d01f9099b54b8074713228f9e19dd76145b9e785c9ccdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types d' anomalies ";
        
        $__internal_b58d66b6a3c38d5796d01f9099b54b8074713228f9e19dd76145b9e785c9ccdd->leave($__internal_b58d66b6a3c38d5796d01f9099b54b8074713228f9e19dd76145b9e785c9ccdd_prof);

        
        $__internal_37a3737368889b10d0c0dc7a445edfd1a8d0e04acddf9754f9bb1e6713bd8efb->leave($__internal_37a3737368889b10d0c0dc7a445edfd1a8d0e04acddf9754f9bb1e6713bd8efb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a99648f1557a198ebf3a9d9e9d4b382d8c4ce8d820bd469566bb5f94d076937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a99648f1557a198ebf3a9d9e9d4b382d8c4ce8d820bd469566bb5f94d076937->enter($__internal_1a99648f1557a198ebf3a9d9e9d4b382d8c4ce8d820bd469566bb5f94d076937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc0428953afc78609aaa6a016bd48ffb602bc888e8b8315cda288a8ae6a836fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0428953afc78609aaa6a016bd48ffb602bc888e8b8315cda288a8ae6a836fd->enter($__internal_cc0428953afc78609aaa6a016bd48ffb602bc888e8b8315cda288a8ae6a836fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc0428953afc78609aaa6a016bd48ffb602bc888e8b8315cda288a8ae6a836fd->leave($__internal_cc0428953afc78609aaa6a016bd48ffb602bc888e8b8315cda288a8ae6a836fd_prof);

        
        $__internal_1a99648f1557a198ebf3a9d9e9d4b382d8c4ce8d820bd469566bb5f94d076937->leave($__internal_1a99648f1557a198ebf3a9d9e9d4b382d8c4ce8d820bd469566bb5f94d076937_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b02556267a7af0326ca58d9b5fea44da5b5af4fec49ca647322d2c568f85bbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02556267a7af0326ca58d9b5fea44da5b5af4fec49ca647322d2c568f85bbf9->enter($__internal_b02556267a7af0326ca58d9b5fea44da5b5af4fec49ca647322d2c568f85bbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e17e3bf0b8037e01e4ecd65f7d3bff47610cbfac58b5656d06ca1aeee4c1b2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17e3bf0b8037e01e4ecd65f7d3bff47610cbfac58b5656d06ca1aeee4c1b2c5->enter($__internal_e17e3bf0b8037e01e4ecd65f7d3bff47610cbfac58b5656d06ca1aeee4c1b2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e17e3bf0b8037e01e4ecd65f7d3bff47610cbfac58b5656d06ca1aeee4c1b2c5->leave($__internal_e17e3bf0b8037e01e4ecd65f7d3bff47610cbfac58b5656d06ca1aeee4c1b2c5_prof);

        
        $__internal_b02556267a7af0326ca58d9b5fea44da5b5af4fec49ca647322d2c568f85bbf9->leave($__internal_b02556267a7af0326ca58d9b5fea44da5b5af4fec49ca647322d2c568f85bbf9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeAnomalie:index.html.twig";
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
", "AdminBundle:CtTypeAnomalie:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeAnomalie/index.html.twig");
    }
}
