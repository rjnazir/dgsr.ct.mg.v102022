<?php

/* AdminBundle:CtMarque:add.html.twig */
class __TwigTemplate_04dade6c8ca75197290a3e246a1aff31d79e63f32efb49436f628e27b735b4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMarque:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c15be665162c105cfd70653c6ccd4044bb4970c3779dd9b1d5bb620a87950dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15be665162c105cfd70653c6ccd4044bb4970c3779dd9b1d5bb620a87950dab->enter($__internal_c15be665162c105cfd70653c6ccd4044bb4970c3779dd9b1d5bb620a87950dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:add.html.twig"));

        $__internal_97bb54594480d1ae29f41a9a8273d52850660174840197fe00b03ec8d40f19d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bb54594480d1ae29f41a9a8273d52850660174840197fe00b03ec8d40f19d2->enter($__internal_97bb54594480d1ae29f41a9a8273d52850660174840197fe00b03ec8d40f19d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15be665162c105cfd70653c6ccd4044bb4970c3779dd9b1d5bb620a87950dab->leave($__internal_c15be665162c105cfd70653c6ccd4044bb4970c3779dd9b1d5bb620a87950dab_prof);

        
        $__internal_97bb54594480d1ae29f41a9a8273d52850660174840197fe00b03ec8d40f19d2->leave($__internal_97bb54594480d1ae29f41a9a8273d52850660174840197fe00b03ec8d40f19d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b376a85794d4863c8c9e84defce3c312b56200b9e1549c780739b728448aacd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b376a85794d4863c8c9e84defce3c312b56200b9e1549c780739b728448aacd3->enter($__internal_b376a85794d4863c8c9e84defce3c312b56200b9e1549c780739b728448aacd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_335a0662fe61fd9b0db9b402c5d0788709918469fe13597996061218495bead6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335a0662fe61fd9b0db9b402c5d0788709918469fe13597996061218495bead6->enter($__internal_335a0662fe61fd9b0db9b402c5d0788709918469fe13597996061218495bead6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_335a0662fe61fd9b0db9b402c5d0788709918469fe13597996061218495bead6->leave($__internal_335a0662fe61fd9b0db9b402c5d0788709918469fe13597996061218495bead6_prof);

        
        $__internal_b376a85794d4863c8c9e84defce3c312b56200b9e1549c780739b728448aacd3->leave($__internal_b376a85794d4863c8c9e84defce3c312b56200b9e1549c780739b728448aacd3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_72d30061e34468eb40e7d7902bb646d9c4074f1021890a1220b5e2afacfbcef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d30061e34468eb40e7d7902bb646d9c4074f1021890a1220b5e2afacfbcef5->enter($__internal_72d30061e34468eb40e7d7902bb646d9c4074f1021890a1220b5e2afacfbcef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f6701d4d2a503a410ecc4de1abf16e21979418a66821b7b7add32dc5f5f86db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6701d4d2a503a410ecc4de1abf16e21979418a66821b7b7add32dc5f5f86db->enter($__internal_5f6701d4d2a503a410ecc4de1abf16e21979418a66821b7b7add32dc5f5f86db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_5f6701d4d2a503a410ecc4de1abf16e21979418a66821b7b7add32dc5f5f86db->leave($__internal_5f6701d4d2a503a410ecc4de1abf16e21979418a66821b7b7add32dc5f5f86db_prof);

        
        $__internal_72d30061e34468eb40e7d7902bb646d9c4074f1021890a1220b5e2afacfbcef5->leave($__internal_72d30061e34468eb40e7d7902bb646d9c4074f1021890a1220b5e2afacfbcef5_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMarque:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

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

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMarque:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMarque/add.html.twig");
    }
}
