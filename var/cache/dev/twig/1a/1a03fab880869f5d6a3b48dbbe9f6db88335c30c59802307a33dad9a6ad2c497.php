<?php

/* @Admin/CtProcesVerbal/index.html.twig */
class __TwigTemplate_339af107dd785c89117d09f4f36d433a4ac2befc3d54e46c4761f59848b0ad63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProcesVerbal/index.html.twig", 1);
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
        $__internal_12dcfe5f2e7bae2a438f8a764a8309cc42f00d1ab82572cc174a64550c6eecff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dcfe5f2e7bae2a438f8a764a8309cc42f00d1ab82572cc174a64550c6eecff->enter($__internal_12dcfe5f2e7bae2a438f8a764a8309cc42f00d1ab82572cc174a64550c6eecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/index.html.twig"));

        $__internal_f8d48ef4d21ea8d9726cfd163c72e71c5e4df28d24cf09d3717b289b3ef952b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d48ef4d21ea8d9726cfd163c72e71c5e4df28d24cf09d3717b289b3ef952b0->enter($__internal_f8d48ef4d21ea8d9726cfd163c72e71c5e4df28d24cf09d3717b289b3ef952b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/index.html.twig"));

        // line 5
        $context["menu_proces_verbal"] = true;
        // line 6
        $context["menu_proces_verbal_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12dcfe5f2e7bae2a438f8a764a8309cc42f00d1ab82572cc174a64550c6eecff->leave($__internal_12dcfe5f2e7bae2a438f8a764a8309cc42f00d1ab82572cc174a64550c6eecff_prof);

        
        $__internal_f8d48ef4d21ea8d9726cfd163c72e71c5e4df28d24cf09d3717b289b3ef952b0->leave($__internal_f8d48ef4d21ea8d9726cfd163c72e71c5e4df28d24cf09d3717b289b3ef952b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc490624f0c46d2f4904008cc6692f17612aeb2933c69a08ac5ddc106c1dbebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc490624f0c46d2f4904008cc6692f17612aeb2933c69a08ac5ddc106c1dbebb->enter($__internal_bc490624f0c46d2f4904008cc6692f17612aeb2933c69a08ac5ddc106c1dbebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_597be0411ea6bbd46653df590f0e363b995bf190973c66959b4afba09cd5ed63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597be0411ea6bbd46653df590f0e363b995bf190973c66959b4afba09cd5ed63->enter($__internal_597be0411ea6bbd46653df590f0e363b995bf190973c66959b4afba09cd5ed63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des proces_verbals ";
        
        $__internal_597be0411ea6bbd46653df590f0e363b995bf190973c66959b4afba09cd5ed63->leave($__internal_597be0411ea6bbd46653df590f0e363b995bf190973c66959b4afba09cd5ed63_prof);

        
        $__internal_bc490624f0c46d2f4904008cc6692f17612aeb2933c69a08ac5ddc106c1dbebb->leave($__internal_bc490624f0c46d2f4904008cc6692f17612aeb2933c69a08ac5ddc106c1dbebb_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_980a3a6f5cdf2e700b8e4674155930d1b27237ce12ae72865d698fd08bb9abe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980a3a6f5cdf2e700b8e4674155930d1b27237ce12ae72865d698fd08bb9abe1->enter($__internal_980a3a6f5cdf2e700b8e4674155930d1b27237ce12ae72865d698fd08bb9abe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b045a1735e99de19648e1db32a015e67e830420e99157e59c82c1a870acd7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b045a1735e99de19648e1db32a015e67e830420e99157e59c82c1a870acd7ff->enter($__internal_2b045a1735e99de19648e1db32a015e67e830420e99157e59c82c1a870acd7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un Proces Verbal
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-proces_verbal\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Type</th>
                                     <th>Tarif</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["proces_verbals"] ?? $this->getContext($context, "proces_verbals")));
        foreach ($context['_seq'] as $context["_key"] => $context["proces_verbal"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["proces_verbal"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["proces_verbal"], "pvType", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["proces_verbal"], "pvTarif", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_edit", array("id" => $this->getAttribute($context["proces_verbal"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_delete", array("id" => $this->getAttribute($context["proces_verbal"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proces_verbal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </tbody>
                        </table>

                        ";
        // line 80
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
        
        $__internal_2b045a1735e99de19648e1db32a015e67e830420e99157e59c82c1a870acd7ff->leave($__internal_2b045a1735e99de19648e1db32a015e67e830420e99157e59c82c1a870acd7ff_prof);

        
        $__internal_980a3a6f5cdf2e700b8e4674155930d1b27237ce12ae72865d698fd08bb9abe1->leave($__internal_980a3a6f5cdf2e700b8e4674155930d1b27237ce12ae72865d698fd08bb9abe1_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27691e551ff27499a9110d17e2ac6433012ff7c0835f0c7b2186802450f1325d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27691e551ff27499a9110d17e2ac6433012ff7c0835f0c7b2186802450f1325d->enter($__internal_27691e551ff27499a9110d17e2ac6433012ff7c0835f0c7b2186802450f1325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b977c303183952cff34042c2a319172e6fe664e1cdd4db8f9d95208e45b526d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b977c303183952cff34042c2a319172e6fe664e1cdd4db8f9d95208e45b526d2->enter($__internal_b977c303183952cff34042c2a319172e6fe664e1cdd4db8f9d95208e45b526d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-proces_verbal').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune proces_verbal trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_b977c303183952cff34042c2a319172e6fe664e1cdd4db8f9d95208e45b526d2->leave($__internal_b977c303183952cff34042c2a319172e6fe664e1cdd4db8f9d95208e45b526d2_prof);

        
        $__internal_27691e551ff27499a9110d17e2ac6433012ff7c0835f0c7b2186802450f1325d->leave($__internal_27691e551ff27499a9110d17e2ac6433012ff7c0835f0c7b2186802450f1325d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProcesVerbal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 94,  239 => 93,  218 => 80,  213 => 76,  201 => 70,  194 => 66,  188 => 63,  184 => 62,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des proces_verbals {% endblock %}

{% set menu_proces_verbal           = true %}
{% set menu_proces_verbal_list      = true %}

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
                    <a href=\"{{ path('proces_verbal_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un Proces Verbal
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('proces_verbal_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-proces_verbal\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Type</th>
                                     <th>Tarif</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for proces_verbal in proces_verbals %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ proces_verbal.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ proces_verbal.pvType }}</td>
                                        <td>{{ proces_verbal.pvTarif }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('proces_verbal_edit', { 'id': proces_verbal.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('proces_verbal_delete', { 'id': proces_verbal.id }) }}\">
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
            \$('#list-proces_verbal').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune proces_verbal trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtProcesVerbal/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProcesVerbal\\index.html.twig");
    }
}
