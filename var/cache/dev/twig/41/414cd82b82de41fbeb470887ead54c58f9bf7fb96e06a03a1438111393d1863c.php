<?php

/* AdminBundle:CtMotif:index.html.twig */
class __TwigTemplate_87badf81bb252fefce2448f8748035cfd36adca618579d8208a3d7165c80f019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotif:index.html.twig", 1);
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
        $__internal_9543f767b3732815c798c8a62b217e028332db107dbbe196fd06a30e6b3ccf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9543f767b3732815c798c8a62b217e028332db107dbbe196fd06a30e6b3ccf3b->enter($__internal_9543f767b3732815c798c8a62b217e028332db107dbbe196fd06a30e6b3ccf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:index.html.twig"));

        $__internal_84444e5166a52518a96e7bf2d99bec20a9b754c55c25635c735dd6fb85377d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84444e5166a52518a96e7bf2d99bec20a9b754c55c25635c735dd6fb85377d33->enter($__internal_84444e5166a52518a96e7bf2d99bec20a9b754c55c25635c735dd6fb85377d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:index.html.twig"));

        // line 5
        $context["menu_motif"] = true;
        // line 6
        $context["menu_motif_type"] = true;
        // line 7
        $context["menu_motif_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9543f767b3732815c798c8a62b217e028332db107dbbe196fd06a30e6b3ccf3b->leave($__internal_9543f767b3732815c798c8a62b217e028332db107dbbe196fd06a30e6b3ccf3b_prof);

        
        $__internal_84444e5166a52518a96e7bf2d99bec20a9b754c55c25635c735dd6fb85377d33->leave($__internal_84444e5166a52518a96e7bf2d99bec20a9b754c55c25635c735dd6fb85377d33_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73b269d59bbf2f7680faffe1d84234202f31f398df69f45f6d1f0a68d8d77303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b269d59bbf2f7680faffe1d84234202f31f398df69f45f6d1f0a68d8d77303->enter($__internal_73b269d59bbf2f7680faffe1d84234202f31f398df69f45f6d1f0a68d8d77303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08407eafbe029c7e1a72e5016cbeda673b213c1e3063b9decec37416f4a98ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08407eafbe029c7e1a72e5016cbeda673b213c1e3063b9decec37416f4a98ac6->enter($__internal_08407eafbe029c7e1a72e5016cbeda673b213c1e3063b9decec37416f4a98ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des motifs ";
        
        $__internal_08407eafbe029c7e1a72e5016cbeda673b213c1e3063b9decec37416f4a98ac6->leave($__internal_08407eafbe029c7e1a72e5016cbeda673b213c1e3063b9decec37416f4a98ac6_prof);

        
        $__internal_73b269d59bbf2f7680faffe1d84234202f31f398df69f45f6d1f0a68d8d77303->leave($__internal_73b269d59bbf2f7680faffe1d84234202f31f398df69f45f6d1f0a68d8d77303_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_98a6e0eed2757b6a3e39e6d24a15db5ef9db94feb50c164249238979d33decb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a6e0eed2757b6a3e39e6d24a15db5ef9db94feb50c164249238979d33decb8->enter($__internal_98a6e0eed2757b6a3e39e6d24a15db5ef9db94feb50c164249238979d33decb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5beb0d28e37e7a1ba75ec78b6845b4c486ddfa56452d5bb1bbbc0b6a7b301c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5beb0d28e37e7a1ba75ec78b6845b4c486ddfa56452d5bb1bbbc0b6a7b301c1a->enter($__internal_5beb0d28e37e7a1ba75ec78b6845b4c486ddfa56452d5bb1bbbc0b6a7b301c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un motif
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                     <th>Calculable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
            // line 59
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo (($this->getAttribute($context["motif"], "mtfIsCalculable", array())) ? ("Oui") : ("Non"));
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_edit", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_delete", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </tbody>
                        </table>

                        ";
        // line 81
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
        
        $__internal_5beb0d28e37e7a1ba75ec78b6845b4c486ddfa56452d5bb1bbbc0b6a7b301c1a->leave($__internal_5beb0d28e37e7a1ba75ec78b6845b4c486ddfa56452d5bb1bbbc0b6a7b301c1a_prof);

        
        $__internal_98a6e0eed2757b6a3e39e6d24a15db5ef9db94feb50c164249238979d33decb8->leave($__internal_98a6e0eed2757b6a3e39e6d24a15db5ef9db94feb50c164249238979d33decb8_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b303506b078a07f88744b24f5ed5387ba7d4a82fb820ae4563d66cb85c67028b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b303506b078a07f88744b24f5ed5387ba7d4a82fb820ae4563d66cb85c67028b->enter($__internal_b303506b078a07f88744b24f5ed5387ba7d4a82fb820ae4563d66cb85c67028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0881eafc1b208773486629d00f98ad51779c8c045f697a047b90eac443241b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0881eafc1b208773486629d00f98ad51779c8c045f697a047b90eac443241b43->enter($__internal_0881eafc1b208773486629d00f98ad51779c8c045f697a047b90eac443241b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-motif').DataTable(
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
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_0881eafc1b208773486629d00f98ad51779c8c045f697a047b90eac443241b43->leave($__internal_0881eafc1b208773486629d00f98ad51779c8c045f697a047b90eac443241b43_prof);

        
        $__internal_b303506b078a07f88744b24f5ed5387ba7d4a82fb820ae4563d66cb85c67028b->leave($__internal_b303506b078a07f88744b24f5ed5387ba7d4a82fb820ae4563d66cb85c67028b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotif:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 95,  241 => 94,  220 => 81,  215 => 77,  203 => 71,  196 => 67,  190 => 64,  186 => 63,  181 => 61,  177 => 59,  173 => 58,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des motifs {% endblock %}

{% set menu_motif           = true %}
{% set menu_motif_type      = true %}
{% set menu_motif_type_list = true %}

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
                    <a href=\"{{ path('motif_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un motif
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('motif_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                     <th>Calculable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for motif in motifs %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ motif.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ motif.mtfLibelle }}</td>
                                        <td>{{ motif.mtfIsCalculable? \"Oui\" : \"Non\" }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('motif_edit', { 'id': motif.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('motif_delete', { 'id': motif.id }) }}\">
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
            \$('#list-motif').DataTable(
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
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtMotif:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotif/index.html.twig");
    }
}
